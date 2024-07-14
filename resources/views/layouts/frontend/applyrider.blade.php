@extends('layouts.app')


@section('styles')
    <style>
        .custom-file-upload {
            margin-top: 3px;
            cursor: pointer;
        }

        .imagetopheading {
            font-size: 14px;
            color: #000;
            margin-top: 15px;
        }

        .applicantbottomtext {
            font-size: 14px;
            margin-top: -8px;
        }

        .custom-file-upload:hover {
            opacity: 0.7;
            /* optional: add hover effect */
        }

        .jobsubmitbtn {
            margin-top: 10px;
            background: #ffa000;
            border: none;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }


        .header {
            display: none;
        }

        .footer {
            display: none;
        }


        form.form.applyform {
            max-width: 800px;
            margin: 0 auto;
            border: 1px double grey;
        }

        /* Media query for screens smaller than 768px (typical mobile devices) */
        @media screen and (max-width: 768px) {
            .form {
                padding: 25px 15px;
                font-size: 15px;
            }

            .form input {
                padding: 13px;
                font-size: 15px;
            }

            .form select {
                padding: 13px;
                font-size: 15px;
            }
        }

        .iti.iti--allow-dropdown.iti--show-flags.iti--inline-dropdown {
            width: 100%;
        }
    </style>

    <style>
        .riderterms {
            color: #000;
        }

        #riderterms-heading {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .riderterms-table {
            border-collapse: collapse;
            width: 100%;
            color: #000;
        }

        .riderterms-table td {
            border: 1px solid #ddd;
            padding: 8px;
            color: #000;
        }

        .riderterms-item {
            font-weight: bold;
            margin-right: 5px;
            color: #000;
        }

        .error-message {
            font-size: 14px;
            color: red;
        }
    </style>

    <style>
        .terms .container {
            max-width: 1200px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .box span {
            font-size: 1.4rem;
        }

        .terms .container .heading {
            text-align: center;
            margin-bottom: 5px !important;
        }

        .terms .container .heading h2 {
            font-size: 22px;
        }

        .terms .container .heading p {
            font-size: 15px;
            font-weight: 500;
        }

        .terms .container .box-conatainer {
            max-width: 100%;
            margin: 0 auto;
        }

        .terms .container .box-conatainer .box {
            padding-top: 10px;
            padding-bottom: 15px;
        }

        .terms .container .box-conatainer .box div {
            display: flex;
            flex-wrap: wrap;
        }

        .terms .container .box-conatainer .box div p {
            flex: 1 1 48%;
            color: black;
            font-weight: 500;
            font-size: 15px;
        }

        .terms .container .box-conatainer .box div p span {
            margin-right: 20px;
        }


        @media(max-width:450px) {

            .terms .container {
                padding: 10px;
            }


            .terms .container .heading h2 {
                font-size: 18px;
                line-height: 1.6;
                margin-bottom: 10px;
            }

            .terms .container .heading p {
                font-size: 14px;
            }

            .terms .container .box-conatainer .box div p {
                font-size: 13px;
            }

            .terms .container .box-conatainer .box div p span {
                margin-right: 10px;
            }

        }

        #emiratesid {
            display: none;
        }
    </style>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@20.0.5/build/css/intlTelInput.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
@endsection

@section('content')
    @if (Session::has('success'))
        <section>
            <div
                style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;font-size:1.3rem;">
                {{ Session::get('success') }}
            </div>
        </section>
    @endif

    <!-- ----------------------------- -->

    <section class="jopformarea">


        <form method="POST" action="{{ route('applicants.store') }}" enctype="multipart/form-data" class="form applyform">
            @csrf
            @if ($errors->any())
                <div class="center allerror">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div>
                @if ($getcountry == 'United Arab Emirates')
                    <h3 style="text-align: center;">انضم إلينا - قدّم طلبك الآن!</h3>
                    <div class="terms">
                        <div class="container">
                            <div class="heading">
                                <p> <strong style="color: #1A6C38;">الحد العمري: 21 - 39 </strong> I <strong
                                        style="color: #D45A15;">لا يتطلب تعليم </strong> I يمكن تقديم الطلب من البلد الأصلي
                                </p>
                                <p> <strong style="color: #86226E;">الراتب الثابت: 2300 درهم إماراتي (بدون خصم) </strong> I
                                    وقت المعالجة الإجمالي: <strong style="color: #FF1D2A;">شهر واحد</strong>
                                </p>

                            </div>
                            <div class="box-conatainer">
                                <a href="#" style="font-weight: 600;font-size:17px;">الشروط والأحكام</a>
                                <div class="box">
                                    <div>
                                        <p><span>01</span> مدة عقد الخدمة</p>
                                        <p><b>:</b> <span style="color: tomato;">سنتان [قابلة للتجديد]</span></p>
                                    </div>
                                    <div>
                                        <p><span>02</span> فترة الاختبار</p>
                                        <p><b>:</b> <span style="color: tomato;">06 أشهر</span> </p>
                                    </div>
                                    <div>
                                        <p><span>03</span> تذكرة الطيران </p>
                                        <p><b>:</b> <span style="color: tomato;">غير مشمولة</span> </p>
                                    </div>
                                    <div>
                                        <p><span>04</span> الإقامة </p>
                                        <p><b>:</b> <a style="text-decoration: none; color: blue;" href="">مقدمة من
                                                الشركة/ النفس</a> <span style="color: tomato;">(شرطي)</span></p>
                                    </div>
                                    <div>
                                        <p><span>05</span> الطعام </p>
                                        <p><b>:</b> النفس</p>
                                    </div>
                                    <div>
                                        <p><span>06</span> ساعات العمل </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">وفقًا
                                                لقانون العمل في الإمارات العربية المتحدة</a> </p>
                                    </div>
                                    <div>
                                        <p><span>07</span> بدل العمل الإضافي </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">وفقًا
                                                لقواعد الشركة</a> </p>
                                    </div>
                                    <div>
                                        <p><span>08</span> الطبية </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">مقدمة من
                                                جهة العمل</a> </p>
                                    </div>
                                    <div>
                                        <p><span>09</span> الإجازة السنوية/ العطلة </p>
                                        <p><b>:</b> نعم</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @elseif ($getcountry == 'Nepal')
                    <h3 style="text-align: center;">हाम्रो टोलमा सामेल हुनुहोस् - अहिले आवेदन गर्नुहोस्!</h3>
                    <div class="terms">
                        <div class="container">
                            <div class="heading">
                                <p> <strong style="color: #1A6C38;">उमेर सीमा: २१ - ३९ </strong> I <strong
                                        style="color: #D45A15;">शिक्षा आवश्यक छैन </strong> I आवेदन होम देशबाट पेश गर्न
                                    सकिन्छ</p>
                                <p> <strong style="color: #86226E;">निश्चित तलब: एडी २३०० (कुनै कर कटौती नभएको) </strong> I
                                    कुल प्रसेसिङ्ग समय: <strong style="color: #FF1D2A;">१ महिना</strong>
                                </p>

                            </div>
                            <div class="box-conatainer">
                                <a href="#" style="font-weight: 600;font-size:17px;">नियम र शर्तहरू</a>
                                <div class="box">
                                    <div>
                                        <p><span>०१</span> सेवा ठेगाना कार्यकालको अवधि</p>
                                        <p><b>:</b> <span style="color: tomato;">दुई (२) वर्ष [नवीनीकरण गर्न सकिने]</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p><span>०२</span> प्रावधानिक काल</p>
                                        <p><b>:</b> <span style="color: tomato;">०६ (छ) महिना</span> </p>
                                    </div>
                                    <div>
                                        <p><span>०३</span> हवाई टिकट </p>
                                        <p><b>:</b> <span style="color: tomato;">समावेश छैन</span> </p>
                                    </div>
                                    <div>
                                        <p><span>०४</span> बसाइ </p>
                                        <p><b>:</b> <a style="text-decoration: none; color: blue;" href="">कम्पनी/
                                                आफूले प्रदान गरेको</a> <span style="color: tomato;">(शर्ताधिन)</span></p>
                                    </div>
                                    <div>
                                        <p><span>०५</span> खाना </p>
                                        <p><b>:</b> आफू</p>
                                    </div>
                                    <div>
                                        <p><span>०६</span> कामको समय </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">यू.ए.इ.
                                                श्रम ऐन अनुसार</a> </p>
                                    </div>
                                    <div>
                                        <p><span>०७</span> ओभर टाइम भत्ता </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">कम्पनीको
                                                नियम अनुसार</a> </p>
                                    </div>
                                    <div>
                                        <p><span>०८</span> चिकित्सा</p>
                                        <p><b>:</b> <a href=""
                                                style="text-decoration: none; color: blue;">कर्मचारीबाट प्रदान गरिएको</a>
                                        </p>
                                    </div>
                                    <div>
                                        <p><span>०९</span> वार्षिक बिदा/ छुट्टी </p>
                                        <p><b>:</b> हो</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @elseif ($getcountry == 'Pakistan')
                    <h3 style="text-align: center;">ہمارے ٹیم میں شامل ہوں - اب درخواست دیں!</h3>
                    <div class="terms">
                        <div class="container">
                            <div class="heading">
                                <p> <strong style="color: #1A6C38;">عمر کی حد: 21 - 39 </strong> I <strong
                                        style="color: #D45A15;">تعلیم کی ضرورت نہیں</strong> I درخواست وطنی ملک سے بھیجی جا
                                    سکتی ہے</p>
                                <p> <strong style="color: #86226E;">مقررہ تنخواہ: اے ای ڈی 2300 (کوئی کٹوتی نہیں) </strong>
                                    I کل عملی وقت: <strong style="color: #FF1D2A;">ایک مہینہ</strong>
                                </p>

                            </div>
                            <div class="box-conatainer">
                                <a href="#" style="font-weight: 600;font-size:17px;">شرائط و ضوابط</a>
                                <div class="box">
                                    <div>
                                        <p><span>01</span> خدمت کی عرصہ کی مدت</p>
                                        <p><b>:</b> <span style="color: tomato;">دو (2) سال [قابل تجدید]</span></p>
                                    </div>
                                    <div>
                                        <p><span>02</span> امتحانی مدت</p>
                                        <p><b>:</b> <span style="color: tomato;">چھ (6) مہینے</span> </p>
                                    </div>
                                    <div>
                                        <p><span>03</span> ہوائی ٹکٹ </p>
                                        <p><b>:</b> <span style="color: tomato;">شامل نہیں</span> </p>
                                    </div>
                                    <div>
                                        <p><span>04</span> رہائشی</p>
                                        <p><b>:</b> <a style="text-decoration: none; color: blue;" href="">کمپنی/
                                                خود</a> <span style="color: tomato;">(شرائطی)</span></p>
                                    </div>
                                    <div>
                                        <p><span>05</span> کھانا </p>
                                        <p><b>:</b> خود</p>
                                    </div>
                                    <div>
                                        <p><span>06</span> کام کا وقت </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">ریاست
                                                العمل ایمارات کے مطابق</a> </p>
                                    </div>
                                    <div>
                                        <p><span>07</span> اضافی وقت کی اجازت </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">کمپنی کے
                                                اصول کے مطابق</a> </p>
                                    </div>
                                    <div>
                                        <p><span>08</span> طبی سہولت</p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">کارکن کی
                                                طرف سے فراہم کی گئی</a> </p>
                                    </div>
                                    <div>
                                        <p><span>09</span> سالانہ چھٹی/ چھٹی</p>
                                        <p><b>:</b> ہاں</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @else
                    <h3 style="text-align: center;">Join Our Team – Apply Now!</h3>
                    <div class="terms">
                        <div class="container">
                            <div class="heading">
                                <p> <strong style="color: #1A6C38;">Age Limit: 21 -39 </strong> I <strong
                                        style="color: #D45A15;">No Education Required </strong> I Application can submit
                                    from
                                    Home Country</p>
                                <p> <strong style="color: #86226E;">Fixed Salary: AED 2300 (No Deduction) </strong> I Total
                                    Processing
                                    Time:
                                    <strong style="color: #FF1D2A;">1 Month</strong>
                                </p>

                            </div>
                            <div class="box-conatainer">
                                <a href="#" style="font-weight: 600;font-size:17px;">Terms and Conditions</a>
                                <div class="box">
                                    <div>
                                        <p><span>01</span> Duration of Service Contract</p>
                                        <p><b>:</b> <span style="color: tomato;">Two (2) Years [renewable]</span></p>
                                    </div>
                                    <div>
                                        <p><span>02</span> Probationary Period</p>
                                        <p><b>:</b> <span style="color: tomato;">06 (Six) Months</span> </p>
                                    </div>
                                    <div>
                                        <p><span>03</span> Air Ticket </p>
                                        <p><b>:</b> <span style="color: tomato;">Not Included</span> </p>
                                    </div>
                                    <div>
                                        <p><span>04</span> Accommodation </p>
                                        <p><b>:</b> <a style="text-decoration: none; color: blue;" href="">Provided
                                                by
                                                Company/ Self</a> <span style="color: tomato;">(Conditional)</span></p>
                                    </div>
                                    <div>
                                        <p><span>05</span> Food </p>
                                        <p><b>:</b> Self</p>
                                    </div>
                                    <div>
                                        <p><span>06</span> Working Hour </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">As per
                                                U.A.E
                                                Labor Law</a> </p>
                                    </div>
                                    <div>
                                        <p><span>07</span> Over Time Allowance </p>
                                        <p><b>:</b> <a href=""style="text-decoration: none; color: blue;">As per
                                                Company
                                                Rules</a> </p>
                                    </div>
                                    <div>
                                        <p><span>08</span> Medical </p>
                                        <p><b>:</b> <a href="" style="text-decoration: none; color: blue;">Provided
                                                by
                                                Employer</a> </p>
                                    </div>
                                    <div>
                                        <p><span>09</span> Annual Leave/ Holiday </p>
                                        <p><b>:</b> Yes</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif


            </div>


            <label for="position">Position</label>
            <select name="position_id" id="position">
                @foreach ($allpositions as $position)
                    @if ($position->status == 1 && $position->rider == 1)
                        <option value="{{ $position->id }}">{{ $position->title }}</option>
                    @endif
                @endforeach

            </select>


            <div class="Nationality">
                <label for="form-field-field_b906e32">
                    Nationality </label>
                <div>
                    <div class="select-caret-down-wrapper">
                        <i aria-hidden="true" class="eicon-caret-down"></i>
                    </div>
                    <select name="nationality" required>
                        <option value="India">India</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Philippines">Indonesia</option>
                        <option value="Philippines">Sri Lanka</option>
                    </select>
                </div>
            </div>

            <div class="uaeresi">
                <label for="uaeresident">Are you UAE Resident ?</label>
                <input type="checkbox" name="uaeresident" id="uaeresident" onclick="toggleEmiratesID()">
            </div>

            <div class="box" id="emiratesidSection" style="display: none;">
                <label for="dob">Emirates ID </label>
                <input type="text" value="{{ old('emiratesid') }}" name="emiratesid" autocomplete="off"
                    id="fixedInput" maxlength="18" class="{{ $errors->has('emiratesid') ? 'error' : '' }}"
                    oninput="formatInput(this)" placeholder="784-####-#######-#" onclick="autofill()">
                @error('emiratesid')
                    <p class="erromessage">{{ $message }}</p>
                @enderror
            </div>


            <div class="name jobcontactnumbers">

                <div class="box">
                    <label for="first_name">First Name</label>
                    <div id="error-container"></div>
                    <input type="text" value="{{ old('first_name') }}" name="first_name" autocomplete="off"
                        id="first_name" class="{{ $errors->has('first_name') ? 'error' : '' }}" required>
                    @error('first_name')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>


                <div class="box">
                    <label for="lname">Last Name</label>
                    <input type="text" name="last_name" autocomplete="off" value="{{ old('last_name') }}"
                        id="lname" class="{{ $errors->has('last_name') ? 'error' : '' }}">
                    @error('last_name')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="name jobcontactnumbers">
                <div class="box">
                    <label for="mother_name">Mother Name (Full)</label>
                    <div id="error-container"></div>
                    <input type="text" value="{{ old('mother_name') }}" name="mother_name" autocomplete="off"
                        id="mother_name" class="{{ $errors->has('mother_name') ? 'error' : '' }}" required>
                    @error('mother_name')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput5">
                <div class="">
                    <div class="imagetopheading">NID/CNIC Front Side</div>
                    <img src="{{ asset('idback.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-nid_cnic_front">
                </div>

                <div class="">
                    <input type="file" name="nid_cnic_front" id="form-field-nid_cnic_front" aria-required="true"
                        value="{{ old('nid_cnic_front') }}" class="{{ $errors->has('nid_cnic_front') ? 'error' : '' }}">
                    @error('nid_cnic_front')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="imageinput5">
                <div class="">
                    <div class="imagetopheading">NID/CNIC Back Side</div>
                    <img src="{{ asset('idfront.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-nid_cnic_back">
                </div>

                <div class="">
                    <input type="file" name="nid_cnic_back" id="form-field-nid_cnic_back" aria-required="true"
                        value="{{ old('nid_cnic_back') }}" class="{{ $errors->has('nid_cnic_back') ? 'error' : '' }}">
                    @error('nid_cnic_back')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>



            <div class="box">
                <label for="dob">Date of Birth </label>
                <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth" autocomplete="off"
                    id="dob" class="{{ $errors->has('date_of_birth') ? 'error' : '' }}" required>
                @error('date_of_birth')
                    <p class="erromessage">{{ $message }}</p>
                @enderror
            </div>


            <div class="jobcontactnumbers">

                <div class="box">
                    <label for="contactnumber">Contact Number</label>
                    <input type="tel" value="{{ old('contact_number') }}" autocomplete="off" name="contact_number"
                        id="phone" class="{{ $errors->has('contact_number') ? 'error' : '' }}">
                    @error('contact_number')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
                <div class="box">
                    <label for="whatsappnumber">Whatsapp Number</label>
                    <input type="tel" value="{{ old('whatsapp_number') }}" autocomplete="off"
                        name="whatsapp_number" id="whatsappnumberflag"
                        class="{{ $errors->has('whatsapp_number') ? 'error' : '' }}">
                    @error('whatsapp_number')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <label for="">Email Address</label>
            <input type="email" name="email" autocomplete="off" id="email" value="{{ old('email') }}"
                class="{{ $errors->has('email') ? 'error' : '' }}">
            <div id="email-error" class="error-message" style="display: none;"></div>

            @error('email')
                <p class="erromessage">{{ $message }}</p>
            @enderror

            <div class="imageinput">
                <div class="">
                    <div class="imagetopheading">Applicant Image</div>
                    <img src="{{ asset('profile.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-upload" class="{{ $errors->has('email') ? 'error' : '' }}">

                </div>

                <div class="">
                    <input type="file" name="applicant_image" accept="image/*" id="form-field-applicantimage"
                        aria-required="true" value="{{ old('applicant_image') }}"
                        class="{{ $errors->has('applicant_image') ? 'error' : '' }}">
                    @error('applicant_image')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput">
                <div class="">
                    <div class="imagetopheading">Passport FIle</div>
                    <img src="{{ asset('passport.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-uploadpassport">
                </div>


                <div class="">
                    <input type="file" name="applicant_passport" id="form-field-applicantpassport"
                        aria-required="true" value="{{ old('applicant_passport') }}"
                        class="{{ $errors->has('applicant_passport') ? 'error' : '' }}">
                    @error('applicant_passport')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <div class="imagetopheading">Passport No</div>
                    <input type="text" name="passportno" id="passportno" value="{{ old('passportno') }}" required>
                </div>

                <div class="box">
                    <label for="date_of_expiry">Date of Expiry </label>
                    <input type="date" value="{{ old('date_of_expiry') }}" name="date_of_expiry" autocomplete="off"
                        id="date_of_expiry" class="{{ $errors->has('date_of_expiry') ? 'error' : '' }}" required>
                    @error('date_of_expiry')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            {{-- <div class="imageinput">
                <div class="">
                    <div class="imagetopheading">Resume FIle</div>
                    <img src="{{ asset('resume.svg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-uploadresume">
                </div>

                <div class="">
                    <input type="file" name="applicant_resume" id="form-field-applicantresume"
                        class="{{ $errors->has('applicant_resume') ? 'error' : '' }}" aria-required="true"
                        value="{{ old('applicant_resume') }}">
                    @error('applicant_resume')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div> --}}

            <div class="imageinput4">
                <div class="">
                    <div class="imagetopheading">Driving License Number</div>
                    <input type="text" name="appli_dri_number" id="appli_dri_number"
                        value="{{ old('appli_dri_number') }}">
                </div>

                <div class="">
                    @error('appli_dri_number')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput6">
                <div class="">
                    <div class="imagetopheading">Special Page (Optional) </div>
                    <img src="{{ asset('specialpapers.svg') }}" alt="Upload" width="60"
                        class="custom-file-upload" id="image-specialpage">
                </div>

                <div class="">
                    <input type="file" name="specialpage" id="form-field-specialpage" aria-required="true"
                        value="{{ old('specialpage') }}" class="{{ $errors->has('specialpage') ? 'error' : '' }}">
                    @error('specialpage')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput5">
                <div class="">
                    <div class="imagetopheading">Driving License Front Side (Home Country)</div>
                    <img src="{{ asset('license.jpg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-uploadlicensefront">
                </div>

                <div class="">
                    <input type="file" name="appli_dri_lisence_frontpart" id="form-field-applicantlicensefront"
                        aria-required="true" value="{{ old('appli_dri_lisence_frontpart') }}"
                        class="{{ $errors->has('appli_dri_lisence_frontpart') ? 'error' : '' }}">
                    @error('appli_dri_lisence_frontpart')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="imageinput6">
                <div class="">
                    <div class="imagetopheading">Driving License Back Side (Home Country)</div>
                    <img src="{{ asset('license.jpg') }}" alt="Upload" width="60" class="custom-file-upload"
                        id="image-uploadlicenseback">
                </div>

                <div class="">
                    <input type="file" name="appli_dri_lisence_backpart" id="form-field-applicantlicenseback"
                        aria-required="true" value="{{ old('appli_dri_lisence_backpart') }}"
                        class="{{ $errors->has('appli_dri_lisence_backpart') ? 'error' : '' }}">
                    @error('appli_dri_lisence_backpart')
                        <p class="erromessage">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="box">
                <label for="lname">Reference Number (Optional)</label>
                <input type="text" name="reference" autocomplete="off" value="{{ old('reference') }}"
                    id="reference" class="{{ $errors->has('reference') ? 'error' : '' }}">
                @error('reference')
                    <p class="erromessage">{{ $message }}</p>
                @enderror
            </div>

            <div class="box" style="margin-top: 5px;">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
            </div>

            <input type="submit" name="Submit" value="Apply Now" class="jobsubmitbtn">

        </form>

    </section>

@endsection


@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image = document.querySelector('#image-upload');

            // Get reference to the file input element
            var fileInput = document.querySelector('#form-field-applicantimage');

            // Add click event listener to the image
            image.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadpassport');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantpassport');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-nid_cnic_front');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-nid_cnic_front');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-nid_cnic_back');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-nid_cnic_back');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadresume');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantresume');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        //Code for license Front side
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadlicensefront');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantlicensefront');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        //Code for license Back side
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-uploadlicenseback');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-applicantlicenseback');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });

        //Code for license Back side
        document.addEventListener("DOMContentLoaded", function() {
            // Get reference to the image element
            var image2 = document.querySelector('#image-specialpage');

            // Get reference to the file input element
            var fileInput2 = document.querySelector('#form-field-specialpage');

            // Add click event listener to the image
            image2.addEventListener('click', function() {
                // Trigger click event on file input
                fileInput2.click();
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/intlTelInput.min.js"></script>
    <script>
        var phone = window.intlTelInput(document.querySelector("#phone"), {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var phone_full_number = phone.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='contact_number'").val(phone_full_number);
        });
    </script>

    <script>
        var whatsappnumb = window.intlTelInput(document.querySelector("#whatsappnumberflag"), {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
            var whatsappnumb_phone = whatsappnumb.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='whatsapp_number'").val(whatsappnumb_phone);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var firstNameInput = document.getElementById("first_name");
            var lastNameInput = document.getElementById("lname");
            var errorContainer = document.getElementById("error-container");

            firstNameInput.addEventListener("input", function(event) {
                validateInput(event, firstNameInput);
            });
            lastNameInput.addEventListener("input", function(event) {
                validateInput(event, lastNameInput);
            });

            function validateInput(event, inputField) {
                var inputValue = event.target.value;

                if (/[\d@#$%^&*()_+=\[\]{}|\\:;'"<>?]/.test(inputValue)) {
                    showError("Numbers, @ and similar characters are not allowed.", inputField);
                    inputField.classList.add("error");
                } else if (inputValue.length < 3) {
                    showError("Minimum 3 characters are required.", inputField);
                    inputField.classList.add("error");
                } else {
                    clearError(inputField);
                    inputField.classList.remove("error");
                }
            }

            function showError(message, inputField) {
                clearError(inputField);

                var errorMessage = document.createElement("p");
                errorMessage.textContent = message;
                errorMessage.classList.add("error-message");

                inputField.parentNode.insertBefore(errorMessage,
                    inputField); // Insert error message before the input field

                // Add error class to the input field
                inputField.classList.add("error");
            }

            function clearError(inputField) {
                var sibling = inputField.previousElementSibling;
                while (sibling) {
                    if (sibling.classList.contains("error-message")) {
                        sibling.parentNode.removeChild(sibling); // Remove any existing error messages
                    }
                    sibling = sibling.previousElementSibling;
                }

                // Remove error class from the input field
                inputField.classList.remove("error");
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dobInput = document.getElementById("dob");
            var errorContainer = document.getElementById("error-container");

            dobInput.addEventListener("input", validateDateOfBirth);

            function validateDateOfBirth(event) {
                var selectedDate = new Date(event.target.value);
                var currentDate = new Date();
                var age = currentDate.getFullYear() - selectedDate.getFullYear();

                // Check if the age is within the specified range
                if (age < 21 || age > 39) {
                    showError("Age must be between 21 and 39 years.", dobInput);
                    dobInput.classList.add("error");
                } else {
                    clearError(dobInput);
                    dobInput.classList.remove("error");
                }
            }

            function showError(message, inputField) {
                clearError(inputField);

                var errorMessage = document.createElement("p");
                errorMessage.textContent = message;
                errorMessage.classList.add("error-message");

                inputField.parentNode.insertBefore(errorMessage,
                    inputField); // Insert error message before the input field

                // Add error class to the input field
                inputField.classList.add("error");
            }

            function clearError(inputField) {
                var sibling = inputField.previousElementSibling;
                while (sibling) {
                    if (sibling.classList.contains("error-message")) {
                        sibling.parentNode.removeChild(sibling); // Remove any existing error messages
                    }
                    sibling = sibling.previousElementSibling;
                }

                // Remove error class from the input field
                inputField.classList.remove("error");
            }
        });
    </script>

    <script>
        function autofill() {
            var input = document.getElementById("fixedInput");
            // Autofill "784" only if the input is empty or the first three characters are not "784"
            if (input.value.length < 3 || input.value.slice(0, 3) !== '784') {
                input.value = '784';
            }
        }

        function formatInput(input) {
            // Remove non-numeric characters
            input.value = input.value.replace(/\D/g, '');

            // Add dashes at fixed positions
            if (input.value.length > 3) {
                input.value = input.value.slice(0, 3) + '-' + input.value.slice(3);
            }
            if (input.value.length > 8) {
                input.value = input.value.slice(0, 8) + '-' + input.value.slice(8);
            }
            if (input.value.length > 16) {
                input.value = input.value.slice(0, 16) + '-' + input.value.slice(16);
            }
        }

        document.getElementById("fixedInput").addEventListener("keydown", function(e) {
            var input = document.getElementById("fixedInput");
            if (e.key === "Backspace" && input.selectionStart <= 3) {
                e.preventDefault();
                input.setSelectionRange(0, 3);
            }
        });
    </script>

    <script>
        function toggleEmiratesID() {
            var checkbox = document.getElementById("uaeresident");
            var emiratesIDSection = document.getElementById("emiratesidSection");

            // If checkbox is checked, show the Emirates ID section; otherwise, hide it
            if (checkbox.checked) {
                emiratesIDSection.style.display = "block";
            } else {
                emiratesIDSection.style.display = "none";
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#email').on('input', function() {
                var email = $(this).val();
                if (email.includes('@')) {
                    // If "@" is included in the email, send AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('check-email') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            email: email
                        },
                        success: function(response) {
                            if (response.exists) {
                                $('#email-error').text('Email already exists').show();
                            } else {
                                $('#email-error').hide();
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
