<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



/**
 * @Route("/")
 */
class MainController extends AbstractController
{
    private $api_url = "http://0.0.0.0:5000/";


    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(SessionInterface $session): Response
    {
        $product = array(
            'id' => '1',
            'name' => 'Casque Marshal',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sint dignissimos eveniet . Accusantium, vero! Officiis, quod fugit, accusantium.',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9',
            'price' => '90.22'
        );
        $customer = array(
            'customer' =>
            array(
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'janedoe@dummy.com',
                'phone' => '+33607080900',
            ),
            'shipping_address' => array(
                'line1' => '2 rue de la Paix',
                'postal_code' => '75008',
                'city' => 'Paris',
            )
        );
        $session->set('customer', $customer);
        $session->set('product', $product);

        return $this->render('product/index.html.twig', [
            'product' => $product
        ]);
    }

    /**
     * @Route("/cart", name="cart", methods={"GET"})
     */
    public function cartlist(SessionInterface $session): Response
    {

        $quantity = $session->get('quantity');
        $total_price = $session->get('total_price');
        $product = $session->get('product');
        return $this->render('product/cart.html.twig', ['product' => $product, 'quantity' => $quantity, 'total_price' => $total_price]);
    }

    /**
     * @Route("/add", name="add_to_cart", methods={"POST"})
     */
    public function add(Request $request, SessionInterface $session)
    {
        //Quantity from Product Page
        $qte = $request->request->get('quantity');

        //values in Session
        $product =  $session->get('product');
        $price = $product['price'];
        $quantity = $session->get('quantity');
        $total_price = $session->get('total_price');

        //Check if Cart is Not Empty
        if (!empty($quantity)) {
            $quantity += $qte;
            $total_price += $price * $qte;
        } else {
            $quantity = $qte;
            $total_price = $price * $qte;
        }

        //Set New Values in Session
        $session->set('quantity', $quantity);
        $session->set('total_price', $total_price);

        return $this->render('product/cart.html.twig', ['product' => $product, 'quantity' => $quantity,  'total_price' => $total_price]);
    }
    /**
     * @Route("/remove", name="remove_from_cart")
     */
    public function remove(SessionInterface $session)
    {

        $session->set('quantity', '');
        $session->set('total_price', '');
        $session->set('product', '');

        return $this->redirectToRoute("cart");
    }


    /**
     * @Route("/payement_eligibility", name="payement_eligibility", methods={"POST"})
     */
    public function check(SessionInterface $session, Request $request): Response
    {
        //Value changed in cart

        if ($request->request->get('totalprice') != 0) {
            $totalprice = $request->request->get('totalprice');
            $quantity = $request->request->get('quantity');

            //Update Value session

            $session->set('quantity', $quantity);
            $session->set('total_price', $totalprice);

            //No changes done in cart   
        } else {
            $totalprice = $session->get('total_price');
        }

        $purchase_amount = intval($totalprice) * 100;

        $customer = $session->get('customer');
        $product = $session->get('product');
        $quantity = $session->get('quantity');
        $total_price = $session->get('total_price');
        $payement = array(
            'payment' =>
            array(
                'purchase_amount' => $purchase_amount,
                'installments_counts' =>
                array(
                    0 => 3,
                    1 => 4,
                ),
            ),
        );

        //Checking for Eligibility 
        $client = HttpClient::create();
        $response = $client->request('POST', $this->api_url . 'payments/eligibility', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => $payement,
        ]);
        $array_response = $response->toArray();

        //Check if it's not eligible at all
        if (!$array_response[0]['eligible'] && !$array_response[1]['eligible']) {
            $eligible = false;
        } else {
            $eligible = true;
        }

        return $this->render(
            'product/cart.html.twig',
            [
                'content' => $array_response,
                'customer' => $customer,
                'product' => $product,
                'quantity' => $quantity,
                'total_price' => $total_price,
                'eligible' => $eligible
            ]
        );
    }

    /**
     * @Route("/payement", name="payement", methods={"POST"})
     */
    public function payement(Request $request, SessionInterface $session)
    {
        $return_url = $this->generateUrl('thankyou', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $payement = array(
            'payment' =>
            array(
                'purchase_amount' => intval($session->get('total_price')) * 100,
                'installments_count' => intval($request->request->get('count')),
                'return_url' => $return_url,
                'shipping_address' =>
                array(
                    'line1' => $request->request->get('line1'),
                    'postal_code' => $request->request->get('postal_code'),
                    'city' => $request->request->get('city'),
                ),
            ),
            'customer' =>
            array(
                'first_name' => $request->request->get('first_name'),
                'last_name' => $request->request->get('last_name'),
                'email' => $request->request->get('email'),
                'phone' => $request->request->get('phone')
            ),
        );
        $client = HttpClient::create();
        $response = $client->request('POST', $this->api_url . 'payments', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => $payement,
        ]);
        $array_response = $response->toArray();

        return $this->redirect($array_response['url'], 301);
    }
    /**
     * @Route("/confirm-order", name="thankyou",)
     */
    public function thankyou(Request $request, SessionInterface $session)
    {
        $pid = $request->query->get('pid');
        $session->set('quantity', '');
        $session->set('total_price', '');
        $session->set('product', '');
        return $this->render('product/thankyou.html.twig', ['pid' => $pid]);
    }
}
