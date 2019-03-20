@extends('layouts.register')

@section('content')
<div class="container">
    <div class="row">
    <div align="center" style="padding:20px;">

                        <!-- Branding Image -->
                        <a class="text-center" href="{{ url('/') }}">
                        <img src="http://badakman.com/wp-content/uploads/2017/08/MAN-1.png" width="300">
                        </a>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="help-block">
                                <h2 class="text-center">Thank You for your Participation</h2>
                               <p>We have received your registration.</p>

<p>Please pay your registration fee to secure your spot and save this Reference No.</p>
<h1 align="center" class="danger"><?php if(isset($_GET['refNo'])){
echo $_GET['refNo']; }
?></h1>
<p>To complete the registration please pay the registration fee through Kwarta Padala Palawan Express/LBC/Mlhuiller/Cebuana Lhuiller.
</p>


<strong><p>Receiver: KIER CHELOMETH T. GO <br />
Cellphone Number: 09503427927 
</p></strong>
<strong><p>Receiver: NEDYLIN E. ARSUA <br />
Cellphone Number: 09106802820 
</p></strong>
<p>And email the receipt together with the Reference Number and your name to info@badakman.com or send us message on  <a href="https://www.facebook.com/badakmanproduction"> facebook @badakmanproduction</a>.
</p>
<p>Please save this information. See you soon!
</p>
                                </div>
                               
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
