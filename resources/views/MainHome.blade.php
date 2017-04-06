@extends('layouts.app')

<link href="/css/icons.css" rel="stylesheet">


@section('content')
    <div class="container" style="text-align: center;" >
    <h1 class="brand-heading">PeerPesa</h1>
    <p class="intro-text">Perfect Platform for Peer to Peer Lending Platform
        <br>Join us to aid your financial needs.</p>
        <br>

        </div>
    <div style=" width: 50%; margin-left: 400px;background:rgba(245,245,245,0.7); color: black">
        <div style="margin-left: 10px; margin-right: 60px">
        <h2 class="intro-text" style="color: #690000; text-transform: uppercase">About PeerPesa</h2>

        <p>Get fast access to low cost working capital finance to help your business grow</p>
        <p>If you’re a business looking for finance to grow your business, then Peerpesa could help.</p>

        <p>   Peerpesa’s Invoice Financing enables you to receive cash advances against your invoices within 24-48 hours rather than wait up to 180 days for your customers to pay. This helps you focus on growing your business and manage your cash flow.
            You choose which invoices you want to receive advances against and find the lowest cost of financing real-time from our investors.</p>
        <ul> Benefits for businesses
            <li>   Finance invoices due within 60 to 180 days</li>
            <li> Receive funds in 24 to 48 hours</li>
            <li> Competitive rates starting from 1% per month</li>
            <li> Only finance the invoices you need</li>

        </ul>
            <br>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br>


    @php(require_once('C:\xampp\htdocs\peerpesa\resources\views\layouts\footer.php') )

@endsection
