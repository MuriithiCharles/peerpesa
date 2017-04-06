@extends('layouts.app')

@section('content')
    <div class="container" style="color: #0d0d0d; background:rgba(245,245,245,0.7); width:50%;margin-left:20px;font-family: " Times New Roman", Georgia, Serif; ">
        <p class="p"><h3 class="header">Investments structured around your needs</h3>
            We’ve created a system allowing investors to reap the rewards of lending, without having to worry about the rest of the process.
           <h3 class="header">We sit in the middle</h3>
            The form of your investment with Peerpesa is called a receivables participation.  This form of investment entitles you to receive payments from Peerpesa. These payments are made to you out of the payments that Peerpesa receives from the borrower of the loan in which you have invested.
            By participating, rather than lending directly to a borrower, you avoid taking on any obligations to the borrower, whilst at the same time being able to benefit from the returns.
            We service the loans
            You have no direct contact with the borrower. Our experienced team deals with the borrower for you, including handling repayments or recoveries
           <h3 class="header">We are not a bank</h3>
            The receivables participation does not constitute a deposit with any member of the Peerpesa.
        </p>
       </div>
    <div class="cognito">
        <script src="https://services.cognitoforms.com/s/zVl0u7ffd0GjroWnHRDeZA"></script>
        <script>Cognito.load("forms", { id: "6" });</script>
    </div>

    <br><br><br><br>
    @php(require_once('C:\xampp\htdocs\peerpesa\resources\views\layouts\footer.php') )

@endsection
