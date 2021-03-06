@include('layouts.header')

@include('layouts.nav')

<div class="container-fluid landing-image">
    <img src="{{ asset('images/contact.jpg') }}" 	width="699px" height="349px">
    <div class="lorem">
        <h4>Lorem</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta ducimus ea laboriosam molestias nam
            omnis quasi ratione rem, repellendus reprehenderit sed unde.
            Asperiores eos ex nihil quasi unde? Illo!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores commodi consequuntur corporis
            dignissimos et illum impedit ipsam labore laboriosam laudantium libero magnam, modi natus obcaecati praesentium
            soluta vel vero.
        </p>
    </div>
</div>
<div class="container">
    <div class="contacts">
    <p class="contact_p"> For more information </p>
    <div class="row">
        <div class="col-md-6 get_in">
            <h3><u>Get in touch </u></h3>
            <p> Aviators Business Park, Nyerere Road.</p>
            <p>Luther Plaza, 1st Floor, Left wing.</p>
            <p>P.O.Box 58339 - 00200</p>
            <p>Nairobi, Kenya</p>
            <p>Tel: +254 795 600090</p>
            <p> +254 795 600 060</p>
            <p>Email: info@aviators.co.ke</p>
        </div>
        <div class="col-md-6 border">
            <div class="form-group">
                <label class="control-label" for="inputDefault">First Name</label>
                <input class="form-control" id="inputDefault" placeholder="First Name" type="text">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Second Name</label>
                <input class="form-control" id="inputDefault" placeholder="Second Name" type="text">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Phone Number</label>
                <input class="form-control" id="inputDefault" placeholder="Phone Number" type="phone_number">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Email</label>
                <input class="form-control" id="inputDefault" placeholder="Email" type="email">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Message/Enquiry/Thoughts</label>
                <textarea class="form-control" rows="3" id="textArea"></textarea>
            </div>
            <a href="#" class="btn btn-primary ">Send</a>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')