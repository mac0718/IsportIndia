@extends('layout.main')
@section('title')
{!! 'Contact iSportIndia' !!}
@endsection

@section('meta_tags')
@php
$url = isset($res) ? url()->current() : 'https://isportindia.com/about';
$image = isset($res) ? getImageUrl($res->img) : 'https://isportindia.com/images/OG.jpg';
$description = isset($res) ? Str::limit($res->short_description, 40, ' ...') : 'Get cricket match updates (Domestic &amp;amp; International), team stats, series results, fixtures, latest news, top stories, match preview, predictions, review, results, fantasy tips, statistical highlights, videos and complete cricket analysis along with ICC Cricket player rankings on isportindia';
@endphp

<meta property="og:url" content="{{ $url }}" />
<meta property="og:image" content="{{ $image }}" />
<meta property="og:description" content="{!! $description !!}" />
@endsection
<style>
    .error-message {
        color: red;
        font-size: 0.8em;
        margin-top: 5px;
    }
</style>
@section('content')
<section class="style_bannerSection__FLIcb">
    <div class="container">
        <div class="undefined">
            <h1 class="mb-2 font-semi " style="padding : 50px 0">Contact Us</h1>
        </div>
    </div>
</section>
<section class="style_formBlock__NJWVF ">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="common-box">
                    <form autocomplete="off" method="POST" action="{{route('postContactUs')}}" id="contactUsForm" class="m-2 m-md-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sName">Full Name*</label><input name="sName" type="text" id="sName" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"><span class="error-message" id="error-sName"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sEmail">Email*</label><input name="sEmail" type="text" id="sEmail" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"><span class="error-message" id="error-sEmail"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sPhone">Phone Number*</label><input name="sPhone" type="number" id="sPhone" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"><span class="error-message" id="error-sPhone"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="company">Company</label><input name="sCompany" type="text" id="company" class="form_formControl__9cVu5 style_formControl__MEbVv form-control"><span class="error-message" id="error-sCompany"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="city">City</label><input name="sCity" type="text" id="city" class="form_formControl__9cVu5 style_formControl__MEbVv form-control"><span class="error-message" id="error-sCity"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="query">Type of Query*</label><select id="sQuery" name="sQuery" class="style_selectNative__t7JoU style_formControl__yKKc1 style_formSelect__qeNdb     br-sm">
                                        <option disabled="" value="">Select Query</option>
                                        <option value="g">General Query</option>
                                        <option value="t">Technical Query</option>
                                        <option value="ad">Advertisement Query</option>
                                        <option value="ct">Content Query</option>
                                    </select></div>
                                <span class="error-message" id="error-sQuery"></span>
                            </div>
                            <div class="col-md-12">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sSubject">Subject*</label><input name="sSubject" type="text" id="sSubject" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"><span class="error-message" id="error-sSubject"></span></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sMessage">Message*</label><textarea name="sMessage" id="sMessage" class="form_formControl__9cVu5 form_formTextarea__37KR6 undefined style_formControl__MEbVv form-control"></textarea><span class="error-message" id="error-sMessage"></span></div>
                            </div>
                        </div><button type="submit" class="theme-btn btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <div class="common-box">
                    <h4 class="text-uppercase">Contact Information</h4>
                    <div class="style_contactInfo__CC6uX mb-3">
                        <p class="d-flex my-3"><span class="d-block me-2"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="mail-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,8 L12,13 L4,8 L4,6 L12,11 L20,6 L20,8 Z" id="Shape" fill="#045DE9" fill-rule="nonzero"></path>
                                    </g>
                                </svg></span><a href="mailto:contact@iSportIndia.com">contact@iSportIndia.com</a></p>
                    </div>
                    <ul class="style_socialMenu__WYNuh d-flex text-uppercase align-items-center reverse_svg_color">
                        <li><a class="d-block" href="https://www.facebook.com/isportindia" target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fackbook-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook" fill="#F2F4F7">
                                            <path d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M16.823269,8.528 C13.8677161,8.528 13.1961504,10.5692278 13.1961504,11.872781 L13.1961504,11.872781 L13.1961504,13.6956571 L11.4863009,13.6956571 L11.4863009,16.5125908 L13.1961504,16.5125908 L13.1961504,24.528 L16.7912671,24.528 L16.7912671,16.5125908 L19.1641485,16.5125908 L19.4782411,13.6982799 L16.7915042,13.6982799 L16.7915042,12.0404244 C16.7915042,11.4185919 17.2371602,11.272587 17.5540975,11.272587 L17.5540975,11.272587 L19.4863009,11.272587 L19.4863009,8.5382728 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a class="d-block" href="https://twitter.com/isportindia1" target="_blank" rel="noreferrer"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_202_150)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16345 0 0 7.16345 0 16C0 24.8366 7.16345 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16345 24.8366 0 16 0ZM13.8597 17.1118L6.44681 7.2H12.1601L17.0198 13.698L23.0346 7.2H24.7134L17.77 14.7011L25.6 25.1704H19.8867L14.6098 18.115L8.07888 25.1704H6.4L13.8597 17.1118ZM11.5404 8.43664H8.91576L20.506 23.9336H23.1307L11.5404 8.43664Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_202_150">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li><a class="d-block" href="https://www.instagram.com/isportindiaofficial/" target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="instagram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="instagram" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.9569778,3.2471803e-13 C24.7694222,3.2471803e-13 31.9139556,7.14453333 31.9139556,15.9569778 C31.9139556,24.7694222 24.7694222,31.9139556 15.9569778,31.9139556 C7.14453333,31.9139556 -5.32907052e-15,24.7694222 -5.32907052e-15,15.9569778 C-5.32907052e-15,7.14453333 7.14453333,3.2471803e-13 15.9569778,3.2471803e-13 Z M20.7128889,6.40142222 L11.2010667,6.40142222 C8.60301261,6.40142222 6.47619304,8.45802412 6.36312759,11.0287083 L6.3584,11.2440889 L6.3584,20.7559111 C6.3584,23.3543111 8.4150019,25.4808034 10.985686,25.5938509 L11.2010667,25.5985778 L20.7128889,25.5985778 C23.3112889,25.5985778 25.4377812,23.5423125 25.5508287,20.971319 L25.5555556,20.7559111 L25.5555556,11.2440889 C25.5555556,8.57386667 23.3834667,6.40142222 20.7128889,6.40142222 Z M11.2010667,8.49066667 L20.7128889,8.49066667 C22.175223,8.49066667 23.3747816,9.63606475 23.4616319,11.0766106 L23.4666667,11.2440889 L23.4666667,20.7559111 C23.4666667,22.2182453 22.3209389,23.4178039 20.8803686,23.5046541 L20.7128889,23.5096889 L11.2010667,23.5096889 C9.7390749,23.5096889 8.53952897,22.3639611 8.4526792,20.9233908 L8.44764444,20.7559111 L8.44764444,11.2440889 C8.44764444,9.78209712 9.59304252,8.5825512 11.0335884,8.49570142 L11.2010667,8.49066667 L20.7128889,8.49066667 Z M15.9569778,11.056 C13.2309333,11.056 11.0129778,13.2739556 11.0129778,16 C11.0129778,18.7264 13.2309333,20.9443556 15.9569778,20.9443556 C18.6830222,20.9443556 20.9013333,18.7260444 20.9013333,16 C20.9013333,13.2739556 18.6833778,11.056 15.9569778,11.056 Z M15.9569778,13.1452444 C17.5310222,13.1452444 18.8117333,14.4263111 18.8117333,15.9996444 C18.8117333,17.5740444 17.5313778,18.8551111 15.9569778,18.8551111 C14.3832889,18.8551111 13.1018667,17.5740444 13.1018667,15.9996444 C13.1018667,14.4259556 14.3832889,13.1452444 15.9569778,13.1452444 Z M21.0602667,9.73866667 C20.4149333,9.73866667 19.8901333,10.2634667 19.8901333,10.9084444 C19.8901333,11.5534222 20.4149333,12.0782222 21.0602667,12.0782222 C21.7052444,12.0782222 22.2300444,11.5534222 22.2300444,10.9084444 C22.2300444,10.2634667 21.7052444,9.73866667 21.0602667,9.73866667 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="common-box">
                    <h4 class="text-uppercase">Advertisement Query</h4>
                    <div class="style_contactInfo__CC6uX">
                        <p>For advertisement query, kindly reach out to us on the below email</p>
                        <p class="d-flex mt-3 mb-1"><span class="d-block me-2"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="mail-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,8 L12,13 L4,8 L4,6 L12,11 L20,6 L20,8 Z" id="Shape" fill="#045DE9" fill-rule="nonzero"></path>
                                    </g>
                                </svg></span><a href="mailto:advertise@iSportIndia.com">advertise@iSportIndia.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactUsForm = document.getElementById("contactUsForm");

        contactUsForm.addEventListener("submit", function(event) {
            event.preventDefault();
            let isValid = true;
            clearErrorMessages(); // Clear all error messages before validation

            // Validate Full Name
            const fullName = document.getElementById("sName");
            if (!fullName.value.trim()) {
                showError("sName", "Full Name is required.");
                isValid = false;
            }

            // Validate Email
            const email = document.getElementById("sEmail");
            if (!email.value.trim()) {
                showError("sEmail", "Email is required.");
                isValid = false;
            } else if (!validateEmail(email.value)) {
                showError("sEmail", "Please enter a valid email address.");
                isValid = false;
            }

            // Validate Phone Number
            const phone = document.getElementById("sPhone");
            if (!phone.value.trim()) {
                showError("sPhone", "Phone Number is required.");
                isValid = false;
            }

            // Validate Full Name
            const query = document.getElementById("sQuery");
            if (!query.value.trim()) {
                showError("sQuery", "General Query is required.");
                isValid = false;
            }

            // Validate Full Name
            const subject = document.getElementById("sSubject");
            if (!subject.value.trim()) {
                showError("sSubject", "Subject is required.");
                isValid = false;
            }

            // Validate Full Name
            const message = document.getElementById("sMessage");
            if (!message.value.trim()) {
                showError("sMessage", "Message is required.");
                isValid = false;
            }

            // Prevent form submission if validation fails
            if (isValid) {
                contactUsForm.submit();
            }
        });

        function showError(fieldId, message) {
            const errorElement = document.getElementById("error-" + fieldId);
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.style.display = "block";
            }
        }

        function clearErrorMessages() {
            document.querySelectorAll('.error-message').forEach(function(errorElement) {
                errorElement.textContent = '';
                errorElement.style.display = 'none';
            });
        }

        function validateEmail(email) {
            const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return re.test(String(email).toLowerCase());
        }
    });
</script>

<script>
    const tabclickHandler = (clickTab, tabs_root_id, active_class) => {
        $(`#${tabs_root_id} .${active_class}`).removeClass(`${active_class}`)
        clickTab.classList.add(active_class);
        let activeTabType = clickTab.getAttribute("tabtype")
        showRespectiveTabSection(tabs_root_id, activeTabType)
    }

    const showRespectiveTabSection = (tabs_root_id, activeTabType) => {
        $(`#${tabs_root_id} .tabs-data`).removeClass("show").addClass('hide');
        localStorage.setItem('news_type', activeTabType);
        $(`#${tabs_root_id} .${activeTabType}-data`).addClass("show")
    }
</script>

<script>
    var n_type = localStorage.getItem('news_type');

    if (n_type == null) {
        $('.Articles').click();
    } else {
        $('.' + n_type).click();
    }
</script>
@endsection