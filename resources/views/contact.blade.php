@extends ('layouts.master')

@section ('title', 'Contact')

@section('content')
    <div class="bg-dark text-center pading">
        <h1 class="text-light"><b>Contact Us</b></h1>
        <nav class="dividr" aria-label="breadcrumb">
            <ol class="breadcrumb pags mt-4">
                <li class="breadcrumb-item"><a class="hom-page" href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>


    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="text-center">
                        <i class="fa-solid fa-location-dot loc-icon"></i>
                        <h5 class="mt-4"><b>Location</b></h5>
                        <small class="loc">Head office: House no 4, Ali Road Block 1 Sector B2 Township Lahore.</small>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="text-center">
                        <i class="fa-solid fa-phone phone-icon"></i>
                        <h5 class="mt-4"><b>Phones</b></h5>
                        <small><b>Sales | +92-0307-9349007</b></small>
                        <br>
                        <small><b>Sales | +92-0313-6900147</b></small>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="text-center">
                        <i class="fa-regular fa-envelope env-icon"></i>
                        <h5 class="mt-4"><b>Email</b></h5>
                        <small class="mail">info@zerohealthcare.com.pk</small>
                        <br>
                        <small class="mail">Sales@zerohealthcare.com.pk</small>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="text-center">
                        <i class="fa-regular fa-clock cloc-icon"></i>
                        <h5 class="mt-4"><b>Working hours</b></h5>
                        <small class="day">Monday-Saturday</small>
                        <br>
                        <small class="day">9:00 AM-7:00 PM</small>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="mt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54455.329518275204!2d74.24109324124032!3d31.45658243588311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919016083f4ef31%3A0x4002aae5f8f6c8ac!2sZero%20Health%20Care!5e0!3m2!1sen!2s!4v1631681021306!5m2!1sen!2s"
            width="100%" height="400" style="border: 0px; pointer-events: none;" allowfullscreen=""
            loading="lazy"></iframe>
    </div>



    <div class="form-section">
        <div class="container">
            <div class="text-center">
                <h2><b>Send Message</b></h2>
                <form>
                    <div class="d-flex mt-4 phon-nam">
                        <div>
                            <input class="nam-box" type="text" name="name" placeholder="Your name">
                        </div>
    
                        <div class="ms-3">
                            <input class="phon-box" type="number" name="phone" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="mt-3">
                        <input class="email-box" type="email" name="email" placeholder="Your email">
                    </div>
                    
                    <div class="mt-4">
                        <textarea name="message" rows="7" cols="67" title="Type a message">
                        </textarea>
                    </div>
                    
                    <div class="mt-4">
                        <button class="btn text-center submit-butn text-light"><b>Submit</b></button>
                    </div> 
                    
                </form>
            </div>
            

        </div>
    </div>


   @endsection