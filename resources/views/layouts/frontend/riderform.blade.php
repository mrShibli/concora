<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Conqueror Services LLC &#8211; Food Delivery Services </title>
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="{{ $pageDescription ?? 'Conqueror Services LLC | Food Delivery Services | UAE | KSA | Bahrain | Qatar' }}">
    <meta property="og:image" content="{{ asset('logoicon.png') }}">

    <!-- <link rel="stylesheet" href="assets/css/input.css"> -->
    <link rel="stylesheet" href="{{ asset('dist/assets/index-DXSHw0cc.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- ---working-- --}}

    <style>
        .error-message {
            font-size: 0.8rem;
            margin-top: 3px;
            color: red;

        }

        /* .fnamearea .error-message, .lnamearea .error-message, .mnamearea .error-message, .ffnamearea .error-message{
            margin-left: 10px;
        } */

        .col-md-6.emailerror .error-message {
            margin-top: -19px;
        }

        .errormessagenumber {
            font-size: 0.8rem;
            margin-top: 3px;
            color: red;
            position: relative;
        }

        .h-\[145vh\] {
            height: 100%;
        }

        .stepactive {
            background-color: red;
            padding: 5px;
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .input-t:focus+.label-t,
        .input-t:valid+.label-t {
            background: transparent !important;
        }

        .spinner {
            display: block;
            margin: 0 auto;
            width: 1rem;
            height: 1rem;
            border: 0.15em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner 0.75s linear infinite;
        }

        @keyframes spinner {
            to {
                transform: rotate(360deg);
            }
        }

        .loading .btn-text {
            display: none;
        }
    </style>

    <style>
        .ar-main-wrapper {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100vw;
            background: #000000b1;
            overflow-y: scroll;
            z-index: 100000;
            opacity: 0;
            transform: scale(0);
            transition: opacity 0.3s, transform 0.3s;
        }

        .ar-main-wrapper.active {
            opacity: 1;
            transform: scale(1);
        }

        /* .ar-main-wrapper .close {
            cursor: pointer;
            padding: 5px 10px;
            background: #fff;
            color: red;
            border-radius: 3px;
            text-align: right;
        } */

        .ar-main-wrapper .agreement {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 15px;
            border-radius: 6px;
        }

        ::-webkit-scrollbar {
            width: 12px;
            /* Added scrollbar width */
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Scrollbar track color */
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            /* Scrollbar thumb color */
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Scrollbar thumb hover color */
        }

        .ar-main-wrapper .agreement .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0px 0;
            margin-bottom: 0px;
        }

        .agreement .header .language {
            margin-bottom: 20px;
        }

        .agreement .header .logo {
            width: 180px;
        }

        @media(max-width:750px) {
            .agreement .header .logo {
                width: 140px;
            }

            .agreement .header .language ul li {
                font-size: 14px;
            }
        }

        .agreement .header .language ul li {
            position: relative;
            font-size: 16px;
            cursor: pointer;
        }

        .agreement .header .language ul li ul {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
        }

        .agreement .header .language ul li:hover ul {
            display: initial;
        }

        .agreement .box-container {
            margin-bottom: 20px;
        }

        .agreement table tr {
            border: 1px solid #bcbcbc;
            padding: 10px;
        }

        .agreement table tr>td {
            padding: 10px;
        }

        .agreement table h2 {
            text-align: center;
            font-size: 15px;
            color: #000;
            line-height: 1.4em;
            font-weight: 600;
        }

        .agreement table h4 {
            text-align: left;
            font-size: 15px;
            color: #111;
            line-height: 1.4em;
            font-weight: 600;
        }

        .agreement .arabic table h4 {
            text-align: right;
            font-size: 15px;
            color: #111;
            line-height: 1.4em;
            font-weight: 600;
        }

        .agreement table p {
            font-size: 14px;
            color: #3e3e3e;
            line-height: 1.4em;
        }

        .agreement .arabic table p {
            text-align: right;
            font-size: 14px;
            color: #3e3e3e;
            line-height: 1.4em;
        }

        .agreement table span {
            margin-right: 8px;
            font-weight: 600;
        }

        .pp p {
            margin-bottom: 10px;
        }

        .terms-of-appoinment li {
            list-style: lower-roman;
            margin-bottom: 10px;
            font-size: 14px;
            color: #3e3e3e;
            line-height: 1.4em;
        }

        .applicant-rider p {
            margin-bottom: 10px;
        }

        @media(max-width:768px) {
            .agreement {
                margin: 20px;
            }
        }

        .language-link.selected {
            font-weight: bold;
            color: blue;
            /* Customize this style as needed */
        }

        .language select {
            padding: 5px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .acceptbutton {
            padding: 8px 22px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
        }

        /* #f3Button {
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        } */
    </style>


</head>

<body>



    <div class="ar-main-wrapper">

        <div class="agreement">
            {{-- <div class=""><i class="fas fa-times"></i></div> --}}
            <div class="header">
                <div class="logo"><img src="assets/Images/logo.png" alt=""></div>
                <div class="language">
                    <select id="language-select">
                        <option value="english" selected>English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div>
            </div>

            <div class="english " id="english-section">

                <div class="box-container">

                    <table>
                        <tr>
                            <td>
                                <h2 class="mb-2">Food Delivery Rider Employment Agreement
                                    <br> (Non-Circumvention Non-Discloser)
                                </h2>
                                <p>This agreement lays down the terms of employment, agreed upon by the employer
                                    and employee. Whether stated explicitly in the agreement or not, both the
                                    employee and the employer have the duty of mutual confidence and trust, and to
                                    make only lawful and reasonable demands on each other</p>
                                <p>Employment Agreement is made and entered into on current Date, Month and
                                    Year by and between:</p>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h4>Between</h4>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h4>“FZ-LLC SERVICES CONQUEROR“</h4>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>a company duly constituted and existing under the laws of United Arab Emirates
                                    having its office at City Pharmacy Building, Suite-M02, Al Khubasi, Port Saeed,
                                    Dubai, U.A.E, in his quality of Conqueror Aspiration LLC, U.A.E (hereinafter
                                    referred
                                    to as “CONQUEROR” as FIRST PARTY”.)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>And</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>The ‘’Applicant” (Rider) an Individual who agrees the below Terms and Conditions
                                    herein;</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="applicant-rider">
                                    <p><b>Contact Number:</b> <span> as per application</span></p>
                                    <p><b>Address Email:</b> <span> as per application</span></p>
                                    <p><b>File Number: </b> <span>CSL/uae/riders/2024/04</span></p>
                                    <p><b>Contract Type: </b> <span>Job Agreement for Food Delivery</span></p>
                                    <p><b>Nationality:</b> <span>Nationality Employee</span></p>
                                    <p><b>Name of Employer:</b> <span> noon/ talabat/ Deliveroo/ Aramex/ KFC
                                            /McDonald’s/ Any
                                            other Food Delivery Co.</span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>The Company and the Employee are collectively referred to as the “Parties” and
                                    individually as a “Party” </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Subject of Agreement: <b>Bike Rider Jobs Agreement Services from Pakistan,
                                        Nepal, India, Sri Lanka and Bangladesh, Memo No.:CAL/uae/riders/2024/04</b></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h4>WHEREAS</h4>
                                <P>CONQUEROR is in the business of providing operations and management services
                                    for Bike Riders Hiring and Placement for Food Delivery Services, including new build
                                    Contract with noon, McDonald’s, Deliveroo, talabat or any other Food Delivery
                                    Company in U.A.E; and</P>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>AND The APPLICANT (Rider) agrees to perform the duties assigned by Conqueror
                                    Services or its clients diligently and to the best of their abilities works relating
                                    to the
                                    Bike Riders Hiring from mentioned Home Country or Inside of UAE. </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>IN CONSIDERATION of the mutual covenants contained in this Agreement, the
                                    parties agree as follows: </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Now therefore in consideration of the above premises, the parties agreed to record
                                    the terms and conditions of the Job Agreement as under:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>AGREED TERMS</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>DEFINITIONS AND INTEERPRETATION</h2>
                            </td>
                        </tr>

                        <tr class="pp">
                            <td>
                                <p> <span>1.1</span> <b>DEFINITIONS:</b> The definitions and rules of interpretation in
                                    this clause
                                    1, the Employment Contract Details, and Salary Details apply in this
                                    Employment Contract.</p>

                                <p> <span>1.2</span> <b>Regulations:</b> means all applicable acts, laws, regulations,
                                    ordinances,
                                    rules, by-laws, guidelines, policies, directions, regulatory Instruments
                                    promulgated by the Authority (which may be amended from time to time).
                                </p>
                                <p> <span>1.3</span> <b>Regulatory Instrument:</b> means any law, regulation, rule,
                                    code, decree,
                                    decision, direction, notice, policies, procedures or by laws issued by the
                                    Authority or a Competent Authority.
                                </p>
                                <p><b>“UAE Labour Law” means (Federal Decree law No. 33 of 2021)
                                        (“New Law”), Federal Law Number 8 0f 1980, as amended,
                                        extended, or re-enacted from time to time and any ministerial
                                        orders, decrees, resolutions, directions or regulations issued by
                                        the Ministry of Human Resource and Emiratisation (‘MOHRE’)
                                    </b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>ARTICLE - 2</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>TERMS OF APPOINTMENT</h2>
                            </td>
                        </tr>
                        <tr class="terms-of-appoinment">
                            <td>
                                <li>The Employee shall work for the Company in the employment position
                                    for a fixed term of two (2) years commencing on the Start Date.</li>
                                <li>The Employee shall carry out duties and perform functions customarily
                                    performed by an employee of a similar designation, which include, but
                                    not limited to the Basic Job Description. </li>
                                <li>The Parties agree that any amendment to the terms of this Employment
                                    Contract must be mutually agreed upon in writing by the Parties. </li>
                                <li>The Company undertakes to notify the Authority of any change to the
                                    terms of employment in relation to the employee’s Employment Position,
                                    responsibilities, Basic Salary, allowance, and other benefits. </li>
                                <li>After the end of the two (2) years fixed term contract, the Company may
                                    extend or renew the Employee’s contract term. If the Employee continues
                                    in the Employment position after two (2) years, then it is deemed a
                                    continuation of the employment contract.
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>3.2 Responsibilities and Obligations of the Applicant</h4>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>3.3.1</span> In all corresponding and other dealings with the Bike Riders, the
                                    JOB
                                    APPLICANT will clearly indicate that they are acting as the JOB
                                    APPLICANT of the Vendors.
                                </p>
                                <p><span>3.3.2</span> The JOB APPLICANT shall be responsible and obligations to
                                    CONQUEROR
                                    under the Contracts are in accordance and in compliance with all the
                                    Applicable laws of U.A.E & UK.
                                </p>
                                <p><span>3.3.3 </span>The JOB APPLICANT shall inform CONQUEROR any and all circumstances
                                    that might have influence on the Client’s Work and the Contracts
                                    (regulations concerning customs, local conditions, etc.) and will provide
                                    timely information and recommendations to remove obstacles and
                                    difficulties, which might result from situation at that time in order to
                                    protect CONQUEROR’s and/or its shareholder’s (s) interest to procure and
                                    also execute the Contracts.</p>

                                <p><span>3.3.4</span> The JOB APPLICANT shall not incur any liability on behalf of
                                    CONQUEROR
                                    nor in any way make any promises, representation or warranty on behalf
                                    of CONQUEROR which is binding on CONQUEROR, without express
                                    written authorization by CONQUEROR in that respect. Any such liability incurred by
                                    any act of the JOB APPLICANT without express written
                                    authorization of CONQUEROR resulting in any claim, loss, damage or any
                                    adverse consequence to CONQUEROR shall be indemnified by the JOB
                                    APPLICANT to CONQUEROR (including legal Commission and expenses)
                                    without prejudice to any other rights available to CONQUEROR under
                                    Law.
                                </p>
                                <p><span>3.3.5</span> The JOB APPLICANT shall not undertake any illegal act on behalf of
                                    CONQUEROR. CONQUEROR shall not be responsible for any act(s) of the
                                    JOB APPLICANT for which the JOB APPLICANT has not been specifically
                                    authorized by CONQUEROR and/or its shareholder (s). JOB APPLICANT
                                    shall fully indemnify CONQUEROR of the consequences (including legal
                                    Commission and expenses) for any act or omission of JOB APPLICANT
                                    which is unauthorized or unlawful and not in accordance with the
                                    Applicable Laws. Any such act or omission of the JOB APPLICANT would
                                    be a breach of this Agreement and shall be deemed to be such an act or
                                    omission for which JOB APPLICANT is responsible, if done or omitted to
                                    be done:</p>
                                <p><span>(a) </span> by anybody corporate or unincorporated (whether constituted at the
                                    date of this Agreement or not) which is controlled wholly or mainly
                                    or directly or indirectly in any manner by JOB APPLICANT or by any
                                    person or persons who controls or control or by any such body which
                                    itself controls wholly or mainly or directly or indirectly in any manner
                                    the JOB APPLICANT; or
                                </p>
                                <p><span>(b)</span> which is controlled wholly or mainly or directly or indirectly by a
                                    person or persons and / or bodies corporate and / or unincorporated
                                    who or which controls or control wholly or mainly or directly or
                                    indirectly the JOB APPLICANT; or</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>TERMINATION</h2>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>1.</span> This Employment Contract may be terminated as follow.
                                </p>
                                <p><span>2.</span> During or upon immediate expiry of the Probation Period by either
                                    Party, with
                                    14 day’s notice period
                                </p>
                                <p><span>3.</span>. By mutual consent of the Parties, with 30 day’s notice provided that
                                    the Employee’s consent is recorded in writing; or</p>
                                <p><span>4.</span>By either party for a legitimate reason, provided that the termination
                                    notice
                                    is in writing and is issued in accordance with the notice period.</p>
                                <p><span>5.</span>If either party fails to serve written notice upon the other party for
                                    the notice
                                    period in accordance with clause 6, or reduces the notice period, the
                                    terminating party shall pay the other Party a compensation in lieu of notice
                                    (a notice of compensation). Notice Compensation shall be equal to the
                                    Employee’s most recent total remuneration for the duration of the Notice
                                    Period or the reduction of the Notice Period.</p>
                                <p><span>6.</span>The Company can terminate this Employment contract with immediate
                                    effect,
                                    without notice and without the obligation of the end of service benefits (other
                                    than in respect of amounts accrued as Total remuneration due at the date of
                                    termination) if the Employee commits any of the offence stipulated under the
                                    UAE Labour Law.</p>
                                <p><span>7.</span>In the event of any breach of the terms and conditions of this
                                    Agreement by
                                    the JOB APPLICANT, CONQUEROR shall give notice to the JOB APPLICANT in
                                    writing to rectify the breach and if such breach is not rectified or remedied
                                    within a period of 7 days from the receipt of such notice, then in that event, on
                                    the expiry of the period of 15 days, the Agreement shall automatically
                                    stand terminated and CONQUEROR shall not be liable to make any payments
                                    to the JOB APPLICANT.</p>
                                <p><span>8. </span> The Agreement can also be terminated by Employer if the Employee is
                                    found
                                    guilty of any conduct which is prejudicial to Employer’s interest.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>TICKET TRAVEL</h2>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>1.</span>In circumstances where the Employee is recruited by the Company from
                                    outside of the UAE, the Company shall bear the cost of the Employee’s air
                                    ticket from th Employee as point of origin to the Emirate of Dubai, or such
                                    other airport in UAE as mutually agreed between the parties in order for the
                                    Employee to commence employment. </p>
                                <p><span>2. </span>If the Employee, whether recruited from outside of the UAE or within
                                    the
                                    UAE, upon termination of this Employment Contract does not take up
                                    subsequent employment elsewhere in the UAE, the Company shall bear the
                                    cost of the Employee’s travel ticket to their place of origin. </p>
                                <p><span>3</span> In the event that this Employment Contract is terminated for reasons
                                    provided under Article 120 of the UAE Labour Law, the Employee shall pay
                                    for their own repatriation expenses. </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>DEATH AND BURIAL</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>In the event of the Employee’s death during the period of employment with the
                                    Company, the Company shall:</p>
                            </td>
                        </tr>

                        <tr class="pp">
                            <td>
                                <p><span>1.</span>bear the cost of transporting the Employee’s body and personal luggage
                                    to
                                    their home country as soon as reasonably practicable following the release of
                                    the body by the relevant authorities for repatriation and burial; </p>
                                <p><span>2.</span>provide the Employee’s appointed beneficiaries with the Employee’s
                                    accruals,
                                    in accordance with the UAE Labour Law.</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>ARTICLE - 3</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="mb-2">CONFIDENTIALITY AND INTELLECTUAL PROPERTY RIGHTS </h4>
                                <p><b>The APPLICANT shall use the information supplied by the First party
                                        (“Confidential Information”), solely for the purpose specified in this
                                        Agreement and as per CONQUEROR requirements under the Employment
                                        Contract.</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>The Confidential Information provided by CONQUEROR, shall remain sole property
                                    of CONQUEROR and shall not be used, duplicated or reproduced by the JOB
                                    APPLICANT in any manner whatsoever. The JOB APPLICANT shall be obliged to
                                    return all the Confidential Information as and when these are called for by
                                    CONQUEROR.
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>The JOB APPLICANT, on its own behalf of its employees undertake that it will hold
                                    in trust and confidence all Confidential Information disclosed during the Term of
                                    this
                                    Agreement and shall not transmit / copy / reproduce / modify any of the information
                                    as aforesaid provided / supplied by CONQUEROR and/or its shareholder (s) for any
                                    purpose whatsoever, except as specifically authorized by CONQUEROR and/or its
                                    shareholder (s) in writing.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>The disclosure of Confidential Information by CONQUEROR and/or its shareholder
                                    (s) pursuant to this Agreement shall not be construed as conveying any intellectual
                                    Property Rights of CONQUEROR and/or its shareholder (s) to the JOB APPLICANT.
                                    All intellectual Property Rights in or relating to any information provided to the
                                    JOB
                                    APPLICANT by CONQUEROR and/or its shareholder (s) shall remain the sole
                                    property of CONQUEROR and/or its shareholder (s).</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>The JOB APPLICANT shall be liable for any direct, indirect or consequential loss or
                                    damage, caused to CONQUEROR for any unauthorized disclosure or use of the
                                    Confidential Information or any infringement of any Intellectual Property Rights of
                                    CONQUEROR and/or its shareholder (s).
                                </p>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <h2> ARTICLE - 4 </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>RELATIONSHIP BETWEEN PARTIES</h4>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p> <span>8.1</span>It is hereby expressly agreed by and between the Parties that
                                    nothing
                                    contained herein shall be deemed to constitute a partnership or joint venture
                                    between the different Vendor Parties. No provisions shall construe the JOB
                                    APPLICANT as the legal representative of CONQUEROR, nor shall be JOB
                                    APPLICANT have the right or authority to assume, create or incur any liability
                                    or any obligation of any kind, express or implied, against, or in the name of,
                                    or on behalf of CONQUEROR unless specifically authorized by CONQUEROR.</p>
                                <p><span>8.2</span> No person employed by either Party for the performance of its
                                    obligations
                                    under the Agreement shall be deemed to be an employee of the other Party
                                    shall be responsible for the payment of all salaries, employment benefits, etc.
                                    with respect to all persons who are engaged by it for the performance of any
                                    obligations under this Agreement and such person shall not be entitled to any
                                    salary benefit or any other claim whatsoever from or against the other Party.
                                    The JOB APPLICANT shall indemnify CONQUEROR and/or its shareholder (s)
                                    against any such claims made by any such person or any third Party.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>ARTICLE - 5</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>NOTICES</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Any notice, demand or other communication to be served under this Agreement
                                    may be served upon either Party hereto by Registered E-Mail or posting by
                                    registered post acknowledgement due to courier or delivering the same or sending
                                    the same by facsimile transmission to the Party (when so served by facsimile
                                    transmission, such notice, demand or other communication shall be followed by a
                                    copy thereof by registered post acknowledgement due or courier, immediately
                                    thereafter) to be served at its address or facsimile number shown below :</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Force Majeure:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>The Conqueror Services shall not be liable for any loss or damage of any description
                                    what so ever arising from the failure or delay in approval of any application due to
                                    the occurrence of an event of force majeure, which term shall include but is not
                                    limited to legislative and regulatory acts of government, armed conflict, civil
                                    insurrection, strike, lockout, earthquake, typhoon, tidal wave, COVID 19 and acts of
                                    God.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Terms of Contract:</h2>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>A.</span>The Applicant acknowledge that they will bear the sole responsibility
                                    for any losses incurred towards them, the project and Conqueror
                                    Services, if the Vendot Contract is a failure or ceased due to their
                                    negligence or non-cooperation during any stages of the Employment
                                    Contract period which can be of the following reasons but not limited
                                    to; Late Login, Late Delivery, Food waste, Packing Damages, Lack of
                                    Communication with the Receiver, Non- Cooperation/response to the
                                    Agents and/or Government bodies etc.</p>
                                <p><span>B.</span>Conqueror Services can claim applicable penalty, fines, legal actions
                                    for any misbehavior, losses encountered due to the Rider’s Absence,
                                    delay, negligence, damages with or without a prior notice issued.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Governing Law:
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>This agreement and negotiations between the parties in connection with it and all
                                    disputes or claims (including non - contractual disputes or claims) arising out of
                                    or
                                    in connection with them or their subject matter or formation shall be governed by
                                    and construed in accordance with the law of United Arab Emirates and United
                                    Kingdom </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Disclaimer:
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>I/we hereby affix my signature on all the pages having thoroughly understood above
                                    terms and conditions in sound mind and consciousness, without any influence or
                                    oppression from anyone.
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="text-center"><b>By clicking "I Accept" below, the Rider acknowledges that they
                                        have read, understood, and agree to be bound by the terms and conditions of this
                                        Agreement</b></p>
                            </td>
                        </tr>

                    </table>


                </div>




            </div>


            <div class="arabic" id="arabic-section" style="display:none;">

                <div class="box-container">

                    <table>
                        <tr>
                            <td>
                                <h2 class="mb-2">اتفاقية توظيف راكب توصيل الطعام
                                    <br>(عدم التحايل وعدم اإلفصاح)
                                </h2>
                                <p>تحدد هذه االتفاقية شروط التوظيف المتفق عليها بين صاحب العمل
                                    والموظف. سواء تم النص صراحة في االتفاقية أم ال، فإن على كل
                                    من الموظف وصاحب العمل واجب الثقة المتبادلة، وتقديم مطالب
                                    قانونية ومعقولة فقط لبعضهما البعض. </p>
                                <p>تم إبرام هذه االتفاقية وإبرامها في التاريخ والشهر والسنة الحاليين
                                    بين: </p>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h4>بين كل من:</h4>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h4>كونكورور اسبيريشن ش.ذ.م.م-منطقة حرة</h4>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>شركة تم تأسيسها وقائمة حسب األصول بموجب قوانين دولة
                                    اإلمارات العربية المتحدة ويقع مكتبها في مبنى صيدلية المدينة،
                                    جناح 02M، الخبازي، بور سعيد، دبي، اإلمارات العربية المتحدة،
                                    بصفته شركة LLC Services Conqueror، اإلمارات العربية
                                    المتحدة (يشار إليها فيما يلي باسم " الفاتح "كطرف أول".)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>--و--</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>"مقدم الطلب" )الراكب( هو الفرد الذي يوافق على الشروط
                                    واألحكام الواردة أدناه؛ </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="applicant-rider">
                                    <p><b>:االتصال رقم</b> <span>لب ح</span></p>
                                    <p><b>حسب الطلب</b> <span>عنوان البريد اإللكتروني:</span></p>
                                    <p><b>CAL/uae/riders/2024/04 </b> <span> :الملف رق</span></p>
                                    <p><b>الطعام لتوصيل عمل ا</b> <span>:العقد ن</span></p>
                                    <p><b>جنسية الموظف</b> <span>الجنسية: </span></p>
                                    <p><b>نون/طلبات/دليفرو/أرامكس/كنتاكي/ماكدونالدز/أي شركة توصيل
                                            .طعام أخرى</b> <span> سم صاحب العمل:</span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>يُشار إلى الشركة والموظف بشكل جماعي باسم "الطرفين"
                                    ."وبشكل فردي باسم "الطرف</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>موضوع االتفاقية: <b>خدمات اتفاقية وظائف سائق الدراجة من
                                        باكستان ونيبال والهند وسريالنكا وبنغالديش، رقم المذكرة:
                                        CAL/uae/riders/2024/04</b></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h4>بينما</h4>
                                <P>تعمل شركة CONQUEROR في مجال توفير خدمات العمليات واإلدارة
                                    لتوظيف راكبي الدراجات وتوظيفهم لخدمات توصيل الطعام، بما في
                                    ذلك عقد البناء الجديد مع نون، أو ماكدونالدز، أو ديليفرو، أو طلبات أو
                                    أي شركة أخرى لتوصيل الطعام في اإلمارات العربية المتحدة؛ و</P>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>ويوافق مقدم الطلب )الراكب( على أداء الواجبات التي تحددها
                                    شركة Services Conqueror أو عمالئها بجد وبأفضل ما لديهم من
                                    قدرات فيما يتعلق باألعمال المتعلقة بتوظيف راكبي الدراجات من
                                    البلد األصلي المذكور أو داخل دولة اإلمارات العربية المتحدة. </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>لذا وافق الطرفان على ما يلي بموجب التعهدات المشتركة الواردة
                                    في هذه االتفاقية: </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>واآلن، وبالنظر إلى المقدمات المذكورة أعاله، اتفق الطرفان على
                                    تسجيل شروط وأحكام اتفاقية الوظيفة على النحو التالي:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>الشروط المتفق عليها</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>تفسير التعاريف </h2>
                            </td>
                        </tr>

                        <tr class="pp">
                            <td>
                                <p> <span>1.1</span> <b>تعريفات:</b> تنطبق التعريفات وقواعد التفسير الواردة في هذاالبند
                                    ،1 وتفاصيل عقد العمل، وتفاصيل الراتب في عقد العمل هذا.</p>

                                <p> <span>1.2</span> <b></b>ُقصد به جميع القوانين والقوانين واللوائح والمراسيم والقواعد
                                    واللوائح والمبادئ التوجيهية والسياسات والتوجيهات واألدوات
                                    التنظيمية المعمول بها والتي تصدرها الهيئة )والتي قد يتم تعديلها
                                    .(من وقت آلخر
                                </p>
                                <p> <span>1.3</span> <b> األداة التنظيمية:</b> تعني أي قانون أو الئحة أو قاعدة أو مدونة
                                    أو 1.3
                                    مرسوم أو قرار أو توجيه أو إشعار أو سياسات أو إجراءات أو بموجب
                                    .قوانين صادرة عن الهيئة أو السلطة المختصة</p>
                                <p><b>قانون العمل اإلماراتي" يعني )مرسوم بقانون اتحادي رقم 33 "
                                        لسنة 2021( )"القانون الجديد"(، القانون االتحادي رقم 8 0 لسنة
                                        ،1980 بصيغته المعدلة أو الممددة أو المعاد سنها من وقت آلخر
                                        وأي أوامر أو مراسيم وزارية القرارات أو التوجيهات أو اللوائح الصادرة
                                        ('MOHRE ('عن وزارة الموارد البشرية والتوطين</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>المادة – 2</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>عيين ش</h2>
                            </td>
                        </tr>
                        <tr class="terms-of-appoinment">
                            <td>
                                <li>نا. يجب أن يعمل الموظف لدى الشركة في منصب وظيفي لمدة
                                    .محددة مدتها سنتان )2( تبدأ من تاريخ البدء</li>
                                <li>ثانيا. يجب على الموظف تنفيذ الواجبات وأداء المهام التي يؤديها
                                    عادة موظف ذو تسمية مماثلة، والتي تشمل، على سبيل المثال
                                    .ال الحصر، الوصف الوظيفي األساسي </li>
                                <li>ثالثا. يتفق الطرفان على أن أي تعديل على شروط عقد العمل هذا
                                    .يجب أن يتم االتفاق عليه كتابيًا بين الطرفين </li>
                                <li>رابعا. تتعهد الشركة بإخطار الهيئة بأي تغيير في شروط التوظيف
                                    فيما يتعلق بالمنصب الوظيفي للموظف ومسؤولياته وراتبه
                                    .األساسي والبدالت والمزايا األخرى</li>
                                <li>v. بعد انتهاء العقد محدد المدة لمدة سنتين )2(، يجوز للشركة تمديد
                                    أو تجديد مدة عقد الموظف. إذا استمر الموظف في الوظيفة بعد
                                    سنتين )2(، فيعتبر ذلك استمرارًا لعقد العمل.
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>مسؤوليات والتزامات الوكالة 3.2</h4>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>3.3.1</span>في جميع المعامالت المقابلة وغيرها من التعامالت مع
                                    راكبي الدراجة، سيشير مقدم الطلب بوضوح إلى أنه يعمل بصفته
                                    .مقدم طلب الوظيفة للبائعين</p>
                                <p><span>3.3.2</span>يجب أن يكون مقدم الطلب مسؤواوتكون التزاماته تجاه الفاتح بموجب
                                    العقود متوافقة ومتوافقة مع جميع القوانين المعمول
                                    .بها في دولة اإلمارات العربية المتحدة والمملكة المتحدة</p>
                                <p><span>3.3.3 </span> يجب على مقدم الطلب إبالغ الفاتح بأي وجميع الظروف
                                    التي قد يكون لها تأثير على عمل العميل والعقود )اللوائح المتعلقة
                                    بالجمارك، والظروف المحلية، وما إلى ذلك( وسيقدم المعلومات
                                    والتوصيات في الوقت المناسب إلزالة العقبات والصعوبات التي قد
                                    نتيجة للوضع في ذلك الوقت من أجل حماية مصلحة الفاتح و/أو
                                    .مساهميه في شراء العقود وتنفيذها أي ًضا</p>

                                <p><span>3.3.4</span>ال يتحمل المتقدم للوظيفة أي مسؤولية نيابة عن الفاتح وال
                                    يقدم بأي شكل من األشكال أي وعود أو إقرارات أو ضمانات نيابة
                                    عن الفاتح، وهو ما يكون ملز ًما للغزاة، دون الحصول على إذن كتابي
                                    صريح من الفاتح في هذا الصدد. أي مسؤولية من هذا القبيل يتم
                                    تكبدها نتيجة ألي تصرف يقوم به مقدم الطلب دون الحصول علىإذن كتابي صريح من الفاتح مما
                                    يؤدي إلى أي مطالبة أو خسارة أو
                                    ضرر أو أي نتيجة سلبية على الفاتح يجب أن يتم تعويضها من قبل
                                    مقدم الطلب إلى الفاتح )بما في ذلك العمولة القانونية والنفقات
                                    دون اإلخالل بما يلي: أي حقوق أخرى متاحة لشركة
                                    .بموجب القانون CONQUEROR</p>
                                <p><span>3.3.5</span> ال يجوز للمتقدم للوظيفة القيام بأي عمل غير قانوني نيابة عن
                                    الفاتح. لن يكون الفاتح مسؤوالً عن أي فعل أفعال لمقدم الطلب لم
                                    يتم تفويض مقدم الطلب على وجه التحديد من قبل الفاتح و/أو
                                    المساهم المساهمين فيه. يجب على مقدم الطلب أن يعوض
                                    الفاتح بالكامل عن العواقب بما في ذلك العمولة القانونية والنفقات(
                                    ألي فعل أو إغفال من جانب مقدم الطلب وهو غير مصرح به أو غير
                                    قانوني وال يتوافق مع القوانين المعمول بها. أي فعل أو إغفال من
                                    جانب مقدم الطلب للوظيفة سيكون بمثابة خرق لهذه االتفاقية،
                                    مقدم الطلب مسؤوالً ويعتبر بمثابة فعل أو إغفال يكون عنه، إذا تم
                                    القيام به أو إغفاله: </p>
                                <p><span>(أ) </span> )أ من قبل أي شخص اعتباري أو غير مؤسس سواء تم تأسيسه
                                    في تاريخ هذه االتفاقية أم ال والذي يتم التحكم فيه كليًا أو بشكل
                                    رئيسي أو بشكل مباشر أو غير مباشر بأي شكل من األشكال
                                    بواسطة مقدم الطلب أو بواسطة أي شخص أو أشخاص يتحكمون أو
                                    يتحكمون أو بواسطة أي من هؤالء الهيئة التي تسيطر بنفسها
                                    بشكل كلي أو رئيسي أو بشكل مباشر أو غير مباشر بأي شكل من
                                    األشكال على المتقدم للوظيفة؛ أو
                                </p>
                                <p><span>(ب)</span>)( التي يتم التحكم فيها كليًا أو بشكل رئيسي أو بشكل مباشر أو
                                    غير مباشر من قبل شخص أو أشخاص و/أو هيئات اعتبارية و/أو غير
                                    مدمجة والتي أو التي تسيطر أو تسيطر بشكل كلي أو رئيسي أو
                                    بشكل مباشر أو غير مباشر على مقدم الطلب؛ أو</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>نهاية</h2>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>1.</span> يجوز إنهاء عقد العمل هذا على النحو التالي.</p>
                                <p><span>2.</span> أثناء أو عند انتهاء فترة االختبار فورًا من قبل أي من الطرفين، معفترة
                                    إشعار مدتها 14 يو ًما</p>
                                <p><span>3.</span>بموافقة الطرفين المتبادلة، مع إشعار مدته 30 يو ًما بشرطتسجيل موافقة
                                    الموظف كتابيًا؛ أو</p>
                                <p><span>4.</span>من قبل أي من الطرفين لسبب مشروع، بشرط أن يكون إشعار.
                                    .اإلنهاء كتابيًا وصادًرا وف ًقا لفترة اإلخطار</p>
                                <p><span>5.</span> إذا فشل أي من الطرفين في تقديم إشعار كتابي إلى الطرف
                                    اآلخر لفترة اإلشعار وف ًق ،6 أو قام بتخفيض فترة اإلشعار، يجب ا للبند
                                    على الطرف الذي أنهى العقد أن يدفع للطرف اآلخر تعوي ًضا بدالً من
                                    ً
                                    اإلشعار إشعار التعويض . يجب أن يكون تعويض اإلشعار مساويا
                                    ألحدث أجر إجمالي للموظف طوال مدة فترة اإلشعار أو تخفيض فترة
                                    اإلشعار.</p>
                                <p><span>6.</span> يمكن للشركة إنهاء عقد العمل هذا بأثر فوري، دون إشعار ودون
                                    االلتزام بمكافأة نهاية الخدمة )بخالف المبالغ المستحقة كإجمالي
                                    المكافأة المستحقة في تاريخ اإلنهاء إذا ارتكب الموظف أيًا من
                                    الجريمة المنصوص عليها في قانون العمل اإلماراتي.</p>
                                <p><span>7.</span>5 يو ًما، سيتم إنهاء االتفاقية تلقائيًا ولن يكون الفاتح مسؤوالً عن
                                    سداد أي مدفوعات إلى مقدم الطلب. في حالة حدوث أي خرق لشروط وأحكام هذه االتفاقية من
                                    قبل
                                    مقدم الطلب، يجب على الفاتح تقديم إشعار كتابي إلى مقدم الطلب
                                    لتصحيح االنتهاك وإذا لم يتم تصحيح هذا الخرق أو معالجته خالل فترة
                                    7 أيام. من استالم هذا اإلشعار، وفي هذه الحالة، عند انتهاء فترة</p>
                                <p><span>8. </span> يمكن أي ًضا لصاحب العمل إنهاء االتفاقية إذا ثبت أن الموظف مذنب
                                    بارتكاب أي سلوك يضر بمصلحة صاحب العمل.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>تذكرة السفر</h2>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span>1.</span> في الظروف التي يتم فيها تعيين الموظف من قبل الشركة من
                                    خارج دولة اإلمارات العربية المتحدة، تتحمل الشركة تكلفة تذكرة
                                    سفر الموظف من الموظف كنقطة انطالق إلى إمارة دبي، أو أي
                                    مطار آخر في دولة اإلمارات العربية المتحدة بشكل متبادل. يتم
                                    االتفاق عليه بين الطرفين حتى يبدأ الموظف العمل. </p>
                                <p><span>2. </span> 2 إذا كان الموظف، سواء تم تعيينه من خارج دولة اإلمارات العربية
                                    المتحدة أو داخل دولة اإلمارات العربية المتحدة، عند انتهاء عقد
                                    العمل هذا، لم يتولى وظيفة الحقة في أي مكان آخر في دولة
                                    اإلمارات العربية المتحدة، فإن الشركة تتحمل تكلفة تذكرة سفر
                                    الموظف إلى مكان عمله. أصل.</p>
                                <p><span>3</span> في حالة إنهاء عقد العمل هذا لألسباب المنصوص عليها في
                                    المادة 120 من قانون العمل اإلماراتي، يجب على الموظف دفع
                                    نفقات إعادته إلى وطنه. </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>الموتوالدفن</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>في حالة وفاة الموظف خالل فترة عمله في الشركة، يجب على
                                    الشركة:</p>
                            </td>
                        </tr>

                        <tr class="pp">
                            <td>
                                <p><span>1.</span>تحمل تكلفة نقل جثمان الموظف وأمتعته الشخصية إلى وطنه
                                    في أقرب وقت ممكن عمليًا بعد إطالق سراح الجثة من قبل
                                    السلطات المختصة إلعادتها إلى الوطن ودفنها؛</p>

                                <p><span>2.</span>تزويد المستحقين المعينين من قبل الموظف بمستحقات الموظف، وفقالقانون
                                    العمل اإلماراتي.</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>المادة – 3</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="mb-2">السرية وحقوق الملكية الفكرية </h4>
                                <p><b>يجب على مقدم الطلب استخدام المعلومات المقدمة من الطرف
                                        األول "المعلومات السرية"، فقط للغرض المحدد في هذه االتفاقية
                                        .ووف ًقا لمتطلبات الفاتح بموجب عقد العمل</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>ظل المعلومات السرية المقدمة من شركة CONQUEROR ملكية
                                    خاصة لشركة CONQUEROR وال يجوز للمتقدم للوظيفة استخدامها
                                    أو تكرارها أو إعادة إنتاجها بأي طريقة كانت. يجب على مقدم الطلب
                                    أن يعيد جميع المعلومات السرية عندما يطلبها CONQUEROR.</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>يتعهد مقدم الطلب، نيابة عن موظفيه، بأنه سيحتفظ بثقة تامة
                                    بجميع المعلومات السرية التي تم الكشف عنها خالل مدة هذه
                                    االتفاقية وال يجوز له نقل / نسخ / إعادة إنتاج / تعديل أي من
                                    المعلومات كما هو مذكور أعاله والمقدمة / المقدمة من قبل شركة
                                    CONQUEROR و/أو المساهمين )المساهمين( فيها ألي غرض كان،
                                    باستثناء ما يسمح به تحدي ًدا شركة CONQUEROR و/أو المساهمين
                                    )المساهمون( فيها كتابيًا.)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>ال يجوز تفسير الكشف عن المعلومات السرية من قبل شركة
                                    CONQUEROR و/أو المساهمين )المساهمين( فيها بموجب هذه
                                    االتفاقية على أنه ينقل أي حقوق ملكية فكرية خاصة بشركة
                                    CONQUEROR و/أو المساهمين )المساهمين( فيها إلى الوكالة.
                                    تظل جميع حقوق الملكية الفكرية في أو المتعلقة بأي معلومات
                                    مقدمة إلى الوكالة من قبل شركة الفاتح و/أو المساهمين
                                    )المساهمين( فيها مل ًكا وحي ًدا لشركة الفاتح و/أو المساهمين فيها.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>تكون الوكالة مسؤولة عن أي خسارة أو ضرر مباشر أو غير مباشر أو
                                    تبعي، يحدث لشركة الفاتح بسبب أي كشف أو استخدام غير مصرح
                                    به للمعلومات السرية أو أي انتهاك ألي حقوق ملكية فكرية لشركة
                                    الفاتح و/أو المساهمين )المساهمين( فيها.</p>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <h2>المادة – 4 </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>العالقة بين األطراف</h4>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p> <span>8.1</span>بموجب هذا يتم االتفاق صراح ًة بين الطرفين على أنه ال يوجد
                                    أي شيء وارد في هذه الوثيقة يعتبر بمثابة شراكة أو مشروع
                                    مشترك بين األطراف الموردة المختلفة. ال يجوز أن تفسر أي أحكام
                                    مقدم الطلب على الوظيفة على أنه الممثل القانوني لشركة
                                    الفاتح، وال يجوز أن يكون لمقدم الوظيفة الحق أو السلطة في
                                    تحمل أو إنشاء أو تحمل أي مسؤولية أو التزام من أي نوع، صري ًحا
                                    ما لم CONQUEROR أو ضمنيًا، ضد أو باسم ، أو بالنيابة عن شركة
                                    .CONQUEROR يتم الحصول على تصريح محدد من شركة</p>
                                <p><span>8.2</span> ال يعتبر أي شخص يستخدمه أي من الطرفين ألداء التزاماته
                                    بموجب االتفاقية موظ ًفا لدى الطرف اآلخر، ويكون مسؤوالً عن دفع
                                    جميع الرواتب ومزايا التوظيف وما إلى ذلك فيما يتعلق بجميع
                                    األشخاص العاملين من قبله ألداء أي التزامات بموجب هذه االتفاقية
                                    وال يحق لهذا الشخص الحصول على أي منفعة من الراتب أو أي
                                    مطالبة أخرى مهما كانت من أو ضد الطرف اآلخر. يجب على الوكالة
                                    تعويض الفاتح و/أو المساهم )المساهمين( ضد أي مطالبات من هذا
                                    القبيل يقدمها أي شخص أو أي طرف ثالث. </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>المادة – 5</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>إشعارات</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>يجوز تقديم أي إشعار أو طلب أو أي اتصال آخر يتم تقديمه
                                    بموجب هذه االتفاقية إلى أي من الطرفين عن طريق البريد
                                    اإللكتروني المسجل أو النشر عن طريق إقرار بالبريد
                                    المسجل بسبب البريد السريع أو تسليمه أو إرساله عن
                                    طريق الفاكس إلى الطرف )عندما يتم إرساله عن طريق
                                    إرسال الفاكس، ويجب أن يتبع هذا اإلشعار أو الطلب أو أي
                                    اتصال آخر نسخة منه عن طريق إقرار بالبريد المسجل
                                    مستحق أو بالبريد السريع، بعد ذلك مباشرة( ليتم إرساله
                                    على عنوانه أو رقم الفاكس الموضح أدناه:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>قوة قهرية:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>ن تكون خدمات الفاتح مسؤولة عن أي خسارة أو ضرر من أي
                                    وصف مهما كان ينشأ عن الفشل أو التأخير في الموافقة على أي
                                    طلب بسبب وقوع حدث قوة قاهرة، وهذا المصطلح يشمل على
                                    سبيل المثال ال الحصر التشريعي واألعمال التنظيمية الحكومية،
                                    والنزاعات المسلحة، والتمرد المدني، واإلضرابات، واإلغالق،
                                    والزالزل، واألعاصير، وموجات المد والجزر، وكوفيد ،19 والقضاء
                                    .والقدر
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>شروط العقد:</h2>
                            </td>
                        </tr>
                        <tr class="pp">
                            <td>
                                <p><span><b>أ.</b></span>يقر مقدم الطلب بأنه سيتحمل وحده المسؤولية عن أي خسائر
                                    تتكبده تجاهه أو تجاه المشروع أو خدمات شركة الفاتح، إذا كان عقد
                                    أو متوق ًفا بسبب إهماله أو عدم تعاونه خالل أي مراحل
                                    البيع فاشالً
                                    من فترة عقد العمل والتي يمكن أن تكون لألسباب التالية على
                                    سبيل المثال ال الحصر؛ تسجيل الدخول المتأخر، التأخر في التسليم،
                                    هدر الطعا م، أضرار التغليف، عدم التواصل مع المستلم، عدم
                                    التعاون/االستجابة للوكالء و/أو الهيئات الحكومية وما إلى ذلك.</p>
                                <p><span><b>ب.</b></span> يمكن لخدمات Conqueror المطالبة بالعقوبات والغرامات
                                    واإلجراءات القانونية المطبقة ألي سوء سلوك أو خسائر ناجمة عنغياب الراكب أو التأخير أو
                                    اإلهمال أو األضرار مع أو بدون إصدار إشعار
                                    مسبق. </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>القانون الذي يحكم:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>تخضع هذه االتفاقية والمفاوضات بين األطراف فيما يتعلق بها وجميع
                                    النزاعات أو المطالبات )بما في ذلك النزاعات أو المطالبات غير
                                    التعاقدية الناشئة عنها أو فيما يتعلق بها أو بموضوعها أو تشكيلها
                                    للقانون وتفسر وف ًقا له. اإلمارات العربية المتحدة والمملكة المتحدة</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>تنويه:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>بموجبه فإنني أوقع على جميع الصفحات وأقر بفهم الشروط واألحكام
                                    السابقة بدقة وبوعي كامل دون أي تأثير أو إجبار من أي شخص آخر.</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="text-center" style="text-align: center;"><b>By clicking "I Accept" below, the
                                        Rider acknowledges that they have read, understood, and agree to be bound by the
                                        terms and conditions of this
                                        Agreement</b></p>
                            </td>
                        </tr>

                    </table>


                </div>


            </div>

            <button class="acceptbutton close">Accept</button>


        </div>

    </div>

    <div class="header bg-White-c p-2  Laptop:py-4  shadow-md rounded-b-3xl top-0 right-0 absolute w-full z-10">
        <div class="container mx-auto">
            <a href="{{ route('mainindex') }}" id="logo"><img class="w-40 Laptop:w-[215px] Tablet:w-[160px]"
                    src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        </div>
    </div>

    <!-- ------------- -->


    <div class="applicant bg-Dull-c pb-4 h-[145vh]">

        <div class="box-container container mx-auto flex flex-nowrap gap-4 Laptop:gap-8">



            @php
                $hasOldData1 = false;
                if (session()->has('step1')) {
                    $oldData1 = json_decode(session()->get('step1'));
                    $hasOldData1 = true;
                }
                $hasOldData2 = false;
                if (session()->has('step2')) {
                    $oldData2 = json_decode(session()->get('step2'));
                    $hasOldData2 = true;
                }
                $hasOldData3 = false;
                if (session()->has('step3')) {
                    $oldData3 = json_decode(session()->get('step3'));
                    $hasOldData3 = true;
                }
                $hasApplicantImg = $hasOldData1 && isset($oldData1->applicant_photo) ? true : false;
                $applicantImageUrl = $hasApplicantImg ? asset('applicants/' . $oldData1->applicant_photo) : '';

                $hasPImage = $hasOldData2 && isset($oldData2->applicant_passport) ? true : false;
                $applicantPassUrl = $hasPImage ? asset('applicants/' . $oldData2->applicant_passport) : '';

                $hasSImage = $hasOldData2 && isset($oldData2->specialpage) ? true : false;
                $applicantSpclAgeUrl = $hasSImage ? asset('applicants/' . $oldData2->specialpage) : '';

                $hasFImage = $hasOldData2 && isset($oldData2->nid_cnic_front) ? true : false;
                $applicantcncfUrl = $hasFImage ? asset('applicants/' . $oldData2->nid_cnic_front) : '';

                $hasBImage = $hasOldData2 && isset($oldData2->nid_cnic_back) ? true : false;
                $applicantcncbUrl = $hasBImage ? asset('applicants/' . $oldData2->nid_cnic_back) : '';
            @endphp

            <div
                class="left-side Laptop:w-[20%] w-full h-auto Laptop:ml-[-40px] h-22  p-2 Laptop:p-4 pb-0 pt-16 Laptop:pt-36   bg-Primary-c ">

                <div class="Laptop:pl-2 Laptop:fixed">
                    <div class="step-titles gap-2 ">

                        <div class="step flex items-center gap-1 Laptop:mb-14" id="firstStep">
                            <span
                                class="Laptop:h-6 h-3 Laptop:w-6 w-3 leading-3 Laptop:leading-6 text-center  rounded-full {{ $currentStep == 1 ? 'bg-[#e0b228]' : 'bg-White-c' }} text-Black-c text-[10px] Laptop:text-sm">1</span>
                            <p class="text-White-c text-[10px] Laptop:text-sm"><a
                                    class="{{ $currentStep == 1 ? 'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md' : '' }}">Basic
                                    Information</a></p>

                        </div>

                        <div class="step flex items-center gap-1 Laptop:mb-14" id="secondStep">
                            <span
                                class="Laptop:h-6 h-3 Laptop:w-6 w-3 leading-3 Laptop:leading-6 text-center  rounded-full {{ $currentStep == 2 ? 'bg-[#e0b228]' : 'bg-White-c' }} text-Black-c text-[10px] Laptop:text-sm">2</span>
                            <p class="text-White-c text-[10px] Laptop:text-sm"><a
                                    class="{{ $currentStep == 2 ? 'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md' : '' }}">NID/CNIC
                                    Information</a></p>
                        </div>
                        <div class="step flex items-center gap-1" id="thirdStep">
                            <span
                                class="Laptop:h-6 h-3 Laptop:w-6 w-3 leading-3 Laptop:leading-6 text-center  rounded-full {{ $currentStep == 3 ? 'bg-[#e0b228]' : 'bg-White-c' }} text-Black-c text-[10px] Laptop:text-sm">3</span>
                            <p class="text-White-c text-[10px] Laptop:text-base"><a
                                    class="{{ $currentStep == 3 ? 'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md' : '' }}">License
                                    Information</a></p>
                        </div>

                    </div>
                </div>

            </div>

            <div
                class="right-side Laptop:w-[80%] bg-White-c   Laptop:mt-28 Laptop:p-6 Laptop:pb-4 p-4  Tablet:m-4 Tablet:mb-6  rounded-md ">
                @if (Session::has('success'))
                    <section>
                        <div
                            style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .5rem 1rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;font-size:1.3rem;; text-align: center">
                            {{ Session::get('success') }}
                        </div>
                    </section>
                @endif

                <h2 class="text-[14px] font-normal leading-4"><span class="text-Indicates">*</span> Indicates a required
                    field</h2>

                <form class="form-card " id="msform" method="POST" enctype="multipart/form-data">

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



                    <style>
                        @media(max-width:768px) {
                            .mbl-hdn {
                                display: none
                            }

                            .applicationphotoMb {
                                display: initial
                            }

                            .applicationphotodesktp {
                                display: none
                            }

                        }
                    </style>


                    <!-- Step 1 -->

                    <fieldset id="fieldset1" style="{{ $currentStep == 1 ? 'display: block' : 'display: none' }}">



                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Name</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">First Name
                                            <span class="text-Indicates">*</span></label>
                                        <div class="field  fnamearea">
                                            <input type="text" name="firstname" id="firstname" autocomplete="off"
                                                class="input-t w-full w-[100%] Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('firstname') ? 'error' : '' }} "
                                                value="{{ $hasOldData1 ? $oldData1->firstname : '' }}"
                                                placeholder="First Name" required>
                                            @error('firstname')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            <!--<label for="" class="label-t">First Name</label>-->
                                        </div>
                                    </div>

                                    <div>
                                        <label for="lastname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px] mb-2">Last Name
                                            <span class="text-Indicates">*</span></label>
                                        <div class="field lnamearea">
                                            <input type="text" name="lastname" id="lastname"
                                                value="{{ $hasOldData1 ? $oldData1->lastname : '' }}"
                                                autocomplete="off"
                                                class="input-t w-full Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('lastname') ? 'error' : '' }}"
                                                placeholder ="Last Name" required>
                                            @error('lastname')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            <!--<label for="" class="label-t">Last Name</label>-->
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>



                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Mother Name</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="mothername"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Full Name
                                            <span class="text-Indicates">*</span></label>
                                        <div class="field  mnamearea">
                                            <input type="text" name="mother_name"
                                                value="{{ $hasOldData1 ? $oldData1->mother_name : '' }}"
                                                id="mother_name" autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('mother_name') ? 'error' : '' }}"
                                                placeholder="Mother Name" required>
                                            <!--<label for="" class="label-t">Mother Name</label>-->
                                            @error('mother_name')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Date of Birth</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="mothername"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Date of
                                            birth <span class="text-Indicates">*</span></label>
                                        <div class="grid grid-cols-3 gap-1 Tablet:gap-2   dobdate relative">

                                            <div class="field">
                                                <select name="date_of_birth_daye" id="date_of_birth_day"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Day</option>
                                                    @for ($i = 1; $i <= 31; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $hasOldData1 && $oldData1->date_of_birth_day == $i ? 'selected' : '' }}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select name="date_of_birth_monthe" id="date_of_birth_month"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Month</option>
                                                    @foreach ([1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'] as $monthNumber => $monthName)
                                                        <option value="{{ $monthNumber }}"
                                                            {{ $hasOldData1 && $oldData1->date_of_birth_month == $monthNumber ? 'selected' : '' }}>
                                                            {{ $monthName }}
                                                        </option>
                                                        {{-- value="{{ $hasOldData1 ? $oldData1->mother_name : '' }}" --}}
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select name="date_of_birth_yeare" id="date_of_birth_year"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Year</option>
                                                    @for ($year = 1960; $year <= 2005; $year++)
                                                        <option value="{{ $year }}"
                                                            {{ $hasOldData1 && $oldData1->date_of_birth_year == $year ? 'selected' : '' }}>
                                                            {{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>

                                            <div id="dexpiryTime"
                                                style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>


                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Country</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="nationality"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Nationality
                                            <span class="text-Indicates">*</span></label>

                                        <div class="field">
                                            <select name="nationality" id="nationality"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                required>
                                                <option value="">Select Nationality</option>

                                                <option
                                                    {{ $hasOldData1 && $oldData1->nationality == 'Pakistan' ? 'selected' : '' }}
                                                    value="Pakistan">Pakistan</option>

                                                <option
                                                    {{ $hasOldData1 && $oldData1->nationality == 'Nepal' ? 'selected' : '' }}
                                                    value="Nepal">Nepal</option>

                                                <option
                                                    {{ $hasOldData1 && $oldData1->nationality == 'India' ? 'selected' : '' }}
                                                    value="India">India</option>

                                                <option
                                                    {{ $hasOldData1 && $oldData1->nationality == 'Sri Lanka' ? 'selected' : '' }}
                                                    value="Sri Lanka">Sri Lanka</option>

                                                <option
                                                    {{ $hasOldData1 && $oldData1->nationality == 'Philippines' ? 'selected' : '' }}
                                                    value="Philippines">Philippines</option>

                                                <option
                                                    {{ $hasOldData1 && $oldData1->nationality == 'Bangladesh' ? 'selected' : '' }}
                                                    value="Bangladesh">Bangladesh</option>



                                            </select>

                                            @error('nationality')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Contact Info</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4 mb-3">

                                    <div>
                                        <label for="email"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Email <span
                                                class="text-Indicates">*</span></label>

                                        <div class="field">
                                            <input type="email" name="email" id="email" autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('email') ? 'error' : '' }}"
                                                value="{{ $hasOldData1 ? $oldData1->email : '' }}" required
                                                placeholder="Email Address">
                                            <div id="email-error" class="error-message" style="display: none;"></div>
                                            @error('email')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            <!--<label for="" class="label-t">Email Address</label>-->
                                        </div>
                                    </div>

                                </div>

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="email"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Phone
                                            Number <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <input type="tel" name="contact_number" id="contact_number"
                                                autocomplete="off" title="Only numbers and hyphens are allowed"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('contact_number') ? 'error' : '' }}"
                                                value="{{ $hasOldData1 ? $oldData1->contact_number : '' }}" required>
                                            <p id="phone-error"></p>
                                            @error('contact_number')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            <!-- <label for="" class="label-t">Contact Number</label> -->
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">WhatsApp
                                            number (optional) </label>
                                        <div class="field">
                                            <input type="tel" name="whatsapp_number" id="whatsapp_number"
                                                autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('whatsapp_number') ? 'error' : '' }}"
                                                value="{{ $hasOldData1 ? $oldData1->whatsapp_number : '' }}" required>
                                            @error('whatsapp_number')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            <!-- <label for="" class="label-t">WhatsApp Number</label> -->
                                            <p id="whatsappnumberflag-error"></p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Application</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Job
                                            position <span class="text-Indicates">*</span></label>

                                        <div class="field">
                                            <select name="job_position" id="job_position"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                required>
                                                @foreach ($allpositions as $position)
                                                    @if ($position->status == 1 && $position->rider == 1)
                                                        <option
                                                            {{ $hasOldData1 && $oldData1->job_position == $position->id ? 'selected' : '' }}
                                                            value="{{ $position->id }}">{{ $position->title }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Applicant’s Photo
                                </h2>
                                <img class="mt-2 w-10 Laptop:w-14"
                                    src="{{ asset('frontend/imagesupdate/applicant-image.svg') }}" alt="">
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 hidden applicationphotoMb">Applicant’s
                                            Photo <span class="text-Indicates">*</span></label>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 applicationphotodesktp ">Add
                                            Photo <span class="text-Indicates">*</span></label>

                                        <div id="uploadArea"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImage"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLink"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a></p>
                                            </div>
                                        </div>
                                        <input type="file" name="applicant_image" id="fileInput" class="hidden"
                                            accept="image/*" aria-required="true"
                                            value="{{ old('applicant_image') }}" required>
                                        @error('applicant_image')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                        <p id="photoError"></p>
                                    </div>

                                </div>

                            </div>

                        </div>



                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const uploadArea = document.getElementById('uploadArea');
                                const uploadLink = document.getElementById('uploadLink');
                                const fileInput = document.getElementById('fileInput');
                                const previewImage = document.getElementById('previewImage');
                                var imageUrl = @json($applicantImageUrl);

                                // Function to load an image from server folder
                                function loadServerImage(imageUrl) {
                                    if (imageUrl) {
                                        previewImage.src = imageUrl;
                                        previewImage.setAttribute('data-loaded', true);
                                    }
                                }

                                // Event listener for file input change
                                fileInput.addEventListener('change', function() {
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            previewImage.src = e.target.result;
                                            previewImage.removeAttribute('data-loaded');
                                        }

                                        reader.readAsDataURL(file);
                                    } else {
                                        previewImage.src = 'assets/Images/Vector.png'; // Default image if no file selected
                                        previewImage.removeAttribute('data-loaded');
                                    }
                                });

                                // Load image from server folder if available
                                loadServerImage(imageUrl);

                                // Event listeners for triggering file input
                                uploadArea.addEventListener('click', function() {
                                    fileInput.click();
                                });

                                uploadLink.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    fileInput.click();
                                });
                            });
                        </script>


                        <div class="button text-right Laptop:mt-10 mt-4 pb-4">

                            <button type="button"
                                class="action-button next Laptop:py-3 py-2 text-xs Laptop:text-base bg-Primary-c text-White-c rounded-2xl leading-5"
                                style="width: 150px" id="f1Button">
                                <span class="btn-text">Save & Continue</span>
                            </button>
                        </div>
                    </fieldset>

                    <!-- Step 2 -->

                    <fieldset id="fieldset2" style="{{ $currentStep == 2 ? 'display: block' : 'display: none' }}">


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Passport & Expiry
                                    Date</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Passport
                                            number <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <input type="text" name="passportno" id="passportno"
                                                autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                value="{{ $hasOldData2 && isset($oldData2->passportno) ? $oldData2->passportno : '' }}"
                                                required>
                                            {{-- <label for="" class="label-t">Passport Number</label> --}}
                                        </div>
                                    </div>

                                    <div>

                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Expiry date
                                            <span class="text-Indicates">*</span></label>
                                        <div class="grid grid-cols-3 gap-1 Tablet:gap-2 expiry   date relative">

                                            <div class="field">
                                                <select name="passport_doe_daye" id="passport_doe_day"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Day</option>
                                                    @php
                                                        $selectedDay =
                                                            isset($hasOldData2) &&
                                                            $hasOldData2 &&
                                                            isset($oldData2->passport_doe_day)
                                                                ? $oldData2->passport_doe_day
                                                                : '';
                                                    @endphp

                                                    @for ($day = 1; $day <= 31; $day++)
                                                        <option value="{{ $day }}"
                                                            {{ $day == $selectedDay ? 'selected' : '' }}>
                                                            {{ $day }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select name="passport_doe_monthe" id="passport_doe_month"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Month</option>
                                                    @php
                                                        $selectedMonth =
                                                            isset($hasOldData2) &&
                                                            $hasOldData2 &&
                                                            isset($oldData2->passport_doe_month)
                                                                ? $oldData2->passport_doe_month
                                                                : '';
                                                        $months = [
                                                            1 => 'January',
                                                            2 => 'February',
                                                            3 => 'March',
                                                            4 => 'April',
                                                            5 => 'May',
                                                            6 => 'June',
                                                            7 => 'July',
                                                            8 => 'August',
                                                            9 => 'September',
                                                            10 => 'October',
                                                            11 => 'November',
                                                            12 => 'December',
                                                        ];
                                                    @endphp
                                                    @foreach ($months as $key => $month)
                                                        <option value="{{ $key }}"
                                                            {{ $key == $selectedMonth ? 'selected' : '' }}>
                                                            {{ $month }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select name="passport_doe_yeare" id="passport_doe_year"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Year</option>
                                                    @php
                                                        $selectedYear =
                                                            isset($hasOldData2) &&
                                                            $hasOldData2 &&
                                                            isset($oldData2->passport_doe_year)
                                                                ? $oldData2->passport_doe_year
                                                                : '';
                                                    @endphp
                                                    @for ($year = 2022; $year <= 2099; $year++)
                                                        <option value="{{ $year }}"
                                                            {{ $year == $selectedYear ? 'selected' : '' }}>
                                                            {{ $year }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div id="pexpiryTime"
                                                style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Father Name</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="fathername"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Full Name
                                            <span class="text-Indicates">*</span></label>
                                        <div class="field ffnamearea">
                                            <input type="text" name="father_name" id="father_name"
                                                autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('father_name') ? 'error' : '' }}"
                                                value="{{ $hasOldData2 ? $oldData2->father_name : '' }}" required>
                                            @error('father_name')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            {{-- <label for="" class="label-t">Father’s Name</label> --}}
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Identity Number</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">NID /
                                            CNIC <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <input type="text" name="nidorcnicnumber" id="nidorcnicnumber"
                                                autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('nidorcnicnumber') ? 'error' : '' }}"
                                                value="{{ $hasOldData2 ? $oldData2->nidorcnicnumber : '' }}" required>
                                            @error('nidorcnicnumber')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                            {{-- <label for="" class="label-t">NID/CNIC</label> --}}
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Marital Status</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Marital
                                            Status <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <select name="martialstatus" id="martialstatus"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                required>
                                                <option value="">Select Status</option>
                                                <option
                                                    {{ $hasOldData2 && $oldData2->martialstatus == 'Single' ? 'selected' : '' }}
                                                    value="Single">Single</option>
                                                <option
                                                    {{ $hasOldData2 && $oldData2->martialstatus == 'Married' ? 'selected' : '' }}
                                                    value="Married">Married</option>
                                                <option
                                                    {{ $hasOldData2 && $oldData2->martialstatus == 'Divorced' ? 'selected' : '' }}
                                                    value="Divorced">Divorced</option>
                                            </select>
                                            @error('martialstatus')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Residency</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div class="YesNo">
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">UAE
                                            resident <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <div class="flex gap-8">
                                                <select name="uaeresident" id="uaeresident"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none">
                                                    <option
                                                        {{ $hasOldData2 && $oldData2->uaeresident == 'No' ? 'selected' : '' }}
                                                        value="No"><span id="no">No</span></option>
                                                    <option
                                                        {{ $hasOldData2 && $oldData2->uaeresident == 'Yes' ? 'selected' : '' }}
                                                        value="Yes"><span id="yes">Yes</span> </option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div id="residence-yes"
                                    class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Emirates
                                            ID <span class="text-Indicates">*</span></label>
                                        <div class="field ">
                                            <input type="text" name="emiratesid" id="fixedInput"
                                                autocomplete="off"
                                                value="{{ $hasOldData2 ? $oldData2->emiratesid : '' }}"
                                                maxlength="18"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('emiratesid') ? 'error' : '' }}"
                                                oninput="formatInput(this)" placeholder="784-####-#######-#"
                                                onclick="autofill()">
                                            @error('emiratesid')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="">
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Expiry
                                            date <span class="text-Indicates">*</span></label>
                                        <div class="grid grid-cols-3 gap-1 Tablet:gap-2   expiry  date relative"
                                            style="padding-bottom: 2rem">

                                            <div class="field">

                                                <select name="emirates_expiry_daye" id="emirates_expiry_day"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                    required>
                                                    <option value="">Day</option>
                                                    @php
                                                        $selectedDay = isset($oldData2->emirates_expiry_day)
                                                            ? $oldData2->emirates_expiry_day
                                                            : null;
                                                    @endphp
                                                    @for ($day = 1; $day <= 31; $day++)
                                                        <option value="{{ $day }}"
                                                            {{ $day == $selectedDay ? 'selected' : '' }}>
                                                            {{ $day }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>

                                            <div class="field">
                                                <select name="emirates_expiry_monthe" id="emirates_expiry_month"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                    required>
                                                    <option value="">Month</option>
                                                    @php
                                                        $selectedMonth = isset($oldData2->emirates_expiry_month)
                                                            ? $oldData2->emirates_expiry_month
                                                            : '';
                                                        $months = [
                                                            1 => 'January',
                                                            2 => 'February',
                                                            3 => 'March',
                                                            4 => 'April',
                                                            5 => 'May',
                                                            6 => 'June',
                                                            7 => 'July',
                                                            8 => 'August',
                                                            9 => 'September',
                                                            10 => 'October',
                                                            11 => 'November',
                                                            12 => 'December',
                                                        ];
                                                    @endphp
                                                    @foreach ($months as $key => $month)
                                                        <option value="{{ $key }}"
                                                            {{ $month == $selectedMonth ? 'selected' : '' }}>
                                                            {{ $month }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="field">
                                                <select name="emirates_expiry_yeare" id="emirates_expiry_year"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                    required>
                                                    <option value="">Year</option>
                                                    @php
                                                        $selectedYear = isset($oldData2->emirates_expiry_year)
                                                            ? $oldData2->emirates_expiry_year
                                                            : '';
                                                        $currentYear = date('Y');
                                                    @endphp
                                                    @for ($year = $currentYear; $year <= $currentYear + 10; $year++)
                                                        <option value="{{ $year }}"
                                                            {{ $year == $selectedYear ? 'selected' : '' }}>
                                                            {{ $year }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>

                                            <div id="eexpiryTime"
                                                style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px">
                                            </div>
                                        </div>

                                    </div>






                                </div>



                            </div>

                        </div> 
                        

                        <div class="" id="residence-no">
                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Religion</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Religion<span
                                                class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <div class="flex gap-8">
                                                <select name="religion" id="religion"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none">
                                                    <option
                                                        {{ $hasOldData2 && $oldData2->religion == 'Islam' ? 'selected' : '' }}
                                                        value="Islam">Islam</option>
                                                    <option
                                                        {{ $hasOldData2 && $oldData2->religion == 'Hindu' ? 'selected' : '' }}
                                                        value="Hindu">Hindu</option>
                                                    <option
                                                        {{ $hasOldData2 && $oldData2->religion == 'Christian' ? 'selected' : '' }}
                                                        value="Christian">Christian </option>
                                                    <option
                                                        {{ $hasOldData2 && $oldData2->religion == 'Buddhist' ? 'selected' : '' }}
                                                        value="Buddhist">Buddhist</option>
                                                </select>
                                            </div>
                                            @error('religion')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Home Country Address
                                </h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2  Laptop:gap-4">

                                    <div>
                                        <label
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Permanent
                                            address <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <input type="text" name="homeaddrss" id="homeaddrss"
                                                autocomplete="off"
                                                value="{{ $hasOldData2 ? $oldData2->homeaddrss : '' }}"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                required>
                                            @error('homeaddrss')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">


                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">State /
                                            Province <span class="text-Indicates">*</span></label>
                                        <select name="province" id="stateProvince"
                                            class="w-full mt-2 px-2 py-2 rounded-md border text-xs">
                                            <option value="">Select State/Province</option>
                                        </select>
                                        @error('province')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">City /
                                            District <span class="text-Indicates">*</span></label>
                                        <select name="city" id="cityDistrict"
                                            class="w-full  mt-2 px-2 py-2 rounded-md border text-xs {{ $errors->has('city') ? 'error' : '' }}">
                                            <option value="">Select City/District</option>
                                            @error('city')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </select>
                                    </div>


                                </div>




                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">


                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Police
                                            Station </label>
                                        <input type="text" name="policeStation" id="policeStation"
                                            value="{{ $hasOldData2 ? $oldData2->policeStation : '' }}"
                                            class="w-full mt-2 px-2 py-2  text-xs rounded-md border outline-none">
                                        @error('policeStation')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Post
                                            Office (Optional) </label>
                                        <input type="text" name="zip" id="postCode"
                                            value="{{ $hasOldData2 ? $oldData2->zip : '' }}"
                                            class="w-full mt-2 px-2 py-2  text-xs rounded-md border outline-none">
                                        @error('zip')
                                            <p class="erromessage">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>

                                <div class="grid grid-cols-1 gap-2  Laptop:gap-4">

                                    <div>
                                        <label
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Reference
                                            number (optional) </label>
                                        <div class="field ">
                                            <input type="text" name="reference" id="reference" autocomplete="off"
                                                value="{{ $hasOldData2 ? $oldData2->reference : '' }}"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none {{ $errors->has('reference') ? 'error' : '' }}"
                                                required>
                                            @error('reference')
                                                <p class="erromessage">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Passport Images</h2>
                                <img class="mt-2 w-10 Laptop:w-14"
                                    src="{{ asset('frontend/imagesupdate/passport.svg') }}" alt="">
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 hidden applicationphotoMb">Passport
                                            Front page <span class="text-Indicates">*</span></label>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 applicationphotodesktp ">Front
                                            page <span class="text-Indicates">*</span></label>

                                        <div id="uploadAreaPassport"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImagePassport"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkPassport"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a></p>
                                            </div>
                                        </div>
                                        <input type="file" name="applicant_passporte" id="fileInputPassport"
                                            value="{{ old('applicant_passporte') }}" class="hidden"
                                            accept="image/*">

                                    </div>
                                    <div id="applicant_passport" style="display: none"></div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaPassport = document.getElementById('uploadAreaPassport');
                                            const uploadLinkPassport = document.getElementById('uploadLinkPassport');
                                            const fileInputPassport = document.getElementById('fileInputPassport');
                                            const previewImagePassport = document.getElementById('previewImagePassport');
                                            var serverImageUrl = @json($applicantPassUrl);

                                            // Function to load an image from server folder
                                            function loadServerImage(imageUrl) {
                                                if (imageUrl) {
                                                    previewImagePassport.src = imageUrl;
                                                    previewImagePassport.setAttribute('data-loaded', true);
                                                }
                                            }

                                            // Event listener for file input change
                                            fileInputPassport.addEventListener('change', function() {
                                                if (fileInputPassport.files.length > 0) {
                                                    const file = fileInputPassport.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImagePassport.src = e.target.result;
                                                        previewImagePassport.removeAttribute('data-loaded');
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImagePassport.src =
                                                        'assets/Images/Vector.png'; // Default image if no file selected
                                                    previewImagePassport.removeAttribute('data-loaded');
                                                }
                                            });

                                            // Load image from server folder if available
                                            loadServerImage(serverImageUrl);

                                            // Event listeners for triggering file input
                                            uploadAreaPassport.addEventListener('click', function() {
                                                fileInputPassport.click();
                                            });

                                            uploadLinkPassport.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputPassport.click();
                                            });
                                        });
                                    </script>

                                    <div>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 hidden applicationphotoMb">Passport
                                            Signature page (optional) <span class="text-Indicates">*</span></label>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 applicationphotodesktp ">Signature
                                            page (optional) </label>

                                        <div id="uploadAreaSignature"
                                            class="field   border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageSignature"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkSignature"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a></p>
                                            </div>
                                        </div>
                                        <input type="file" name="specialpagee" id="fileInputSignature"
                                            value="{{ old('specialpagee') }}" class="hidden" accept="image/*">
                                    </div>
                                    <div id="specialpage" style="display: none"></div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaSignature = document.getElementById('uploadAreaSignature');
                                            const uploadLinkSignature = document.getElementById('uploadLinkSignature');
                                            const fileInputSignature = document.getElementById('fileInputSignature');
                                            const previewImageSignature = document.getElementById('previewImageSignature');
                                            var serverImageUrlSignature = @json($applicantSpclAgeUrl);

                                            // Function to load an image from server folder
                                            function loadServerImageSignature(imageUrl) {
                                                if (imageUrl) {
                                                    previewImageSignature.src = imageUrl;
                                                    previewImageSignature.setAttribute('data-loaded', true);
                                                }
                                            }

                                            // Event listener for file input change
                                            fileInputSignature.addEventListener('change', function() {
                                                if (fileInputSignature.files.length > 0) {
                                                    const file = fileInputSignature.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageSignature.src = e.target.result;
                                                        previewImageSignature.removeAttribute('data-loaded');
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageSignature.src =
                                                        'assets/Images/Vector.png'; // Default image if no file selected
                                                    previewImageSignature.removeAttribute('data-loaded');
                                                }
                                            });

                                            // Load image from server folder if available
                                            loadServerImageSignature(serverImageUrlSignature);

                                            // Event listeners for triggering file input
                                            uploadAreaSignature.addEventListener('click', function() {
                                                fileInputSignature.click();
                                            });

                                            uploadLinkSignature.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputSignature.click();
                                            });
                                        });
                                    </script>




                                </div>

                            </div>


                        </div>



                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">NID / CNIC Images
                                </h2>
                                <img class="mt-2 w-10 Laptop:w-14"
                                    src="{{ asset('frontend/imagesupdate/idfront.svg') }}" alt="">
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 ">NID / CNIC
                                            front <span class="text-Indicates">*</span></label>

                                        <div id="uploadAreaNID"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageNID"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkNID"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a></p>
                                            </div>
                                        </div>
                                        <input type="file" name="nid_cnic_fronte"
                                            value="{{ old('nid_cnic_fronte') }}" id="fileInputNID" class="hidden"
                                            accept="image/*">
                                    </div>
                                    <div id="nid_cnic_front" style="display: none"></div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaNID = document.getElementById('uploadAreaNID');
                                            const uploadLinkNID = document.getElementById('uploadLinkNID');
                                            const fileInputNID = document.getElementById('fileInputNID');
                                            const previewImageNID = document.getElementById('previewImageNID');
                                            var serverImageUrlNID = @json($applicantcncfUrl);

                                            // Function to load an image from server folder
                                            function loadServerImageNID(imageUrl) {
                                                if (imageUrl) {
                                                    previewImageNID.src = imageUrl;
                                                    previewImageNID.setAttribute('data-loaded', true);
                                                }
                                            }

                                            // Event listener for file input change
                                            fileInputNID.addEventListener('change', function() {
                                                if (fileInputNID.files.length > 0) {
                                                    const file = fileInputNID.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageNID.src = e.target.result;
                                                        previewImageNID.removeAttribute('data-loaded');
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageNID.src = 'assets/Images/Vector.png'; // Default image if no file selected
                                                    previewImageNID.removeAttribute('data-loaded');
                                                }
                                            });

                                            // Load image from server folder if available
                                            loadServerImageNID(serverImageUrlNID);

                                            // Event listeners for triggering file input
                                            uploadAreaNID.addEventListener('click', function() {
                                                fileInputNID.click();
                                            });

                                            uploadLinkNID.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputNID.click();
                                            });
                                        });
                                    </script>


                                    <div>
                                        <label for="jobpossition"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">NID / CNIC
                                            Back </label>
                                        <div id="uploadAreaNIDBack"
                                            class="field  border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageNIDBack"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkNIDBack"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a></p>
                                            </div>
                                        </div>
                                        <input type="file" name="nid_cnic_backe" id="fileInputNIDBack"
                                            value="{{ old('nid_cnic_backe') }}" class="hidden" accept="image/*">
                                    </div>
                                    <div id="nid_cnic_back" style="display: none"></div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaNIDBack = document.getElementById('uploadAreaNIDBack');
                                            const uploadLinkNIDBack = document.getElementById('uploadLinkNIDBack');
                                            const fileInputNIDBack = document.getElementById('fileInputNIDBack');
                                            const previewImageNIDBack = document.getElementById('previewImageNIDBack');
                                            var serverImageUrlNIDBack = @json($applicantcncbUrl);

                                            // Function to load an image from server folder
                                            function loadServerImageNIDBack(imageUrl) {
                                                if (imageUrl) {
                                                    previewImageNIDBack.src = imageUrl;
                                                    previewImageNIDBack.setAttribute('data-loaded', true);
                                                }
                                            }

                                            // Event listener for file input change
                                            fileInputNIDBack.addEventListener('change', function() {
                                                if (fileInputNIDBack.files.length > 0) {
                                                    const file = fileInputNIDBack.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageNIDBack.src = e.target.result;
                                                        previewImageNIDBack.removeAttribute('data-loaded');
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageNIDBack.src =
                                                        'assets/Images/Vector.png'; // Default image if no file selected
                                                    previewImageNIDBack.removeAttribute('data-loaded');
                                                }
                                            });

                                            // Load image from server folder if available
                                            loadServerImageNIDBack(serverImageUrlNIDBack);

                                            // Event listeners for triggering file input
                                            uploadAreaNIDBack.addEventListener('click', function() {
                                                fileInputNIDBack.click();
                                            });

                                            uploadLinkNIDBack.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputNIDBack.click();
                                            });
                                        });
                                    </script>

                                </div>

                            </div>


                        </div>

  

                        <div class="button text-right Laptop:mt-10 mt-4 pb-4 ">
                            <button type="button" id="previous2"
                                class="previous Laptop:px-10 Laptop:py-3 px-4 py-2 text-xs Laptop:text-base bg-Black-c text-White-c rounded-2xl leading-5 mr-4">
                                Previous
                            </button>

                            <button type="button"
                                class="action-button next Laptop:py-3 py-2 text-xs Laptop:text-base bg-Primary-c text-White-c rounded-2xl leading-5"
                                style="width: 150px" id="f2Button">
                                <span class="btn-text">Save & Continue</span>
                            </button>
                        </div>
                    </fieldset>

                    {{-- ------------------------------------------------------------------------------------------------------- --}}

                    <!-- Step 3 -->


                    <fieldset id="fieldset3" style="{{ $currentStep == 3 ? 'display: block' : 'display: none' }}">


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center gap-4">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">Submission ID</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <div class="field bg-gray-200 border Laptop:p-1.5 p-1 rounded">
                                            @if (Session::has('submissionID'))
                                                <p class="text-xs Tablet:text-sm">{{ $submissionID }}</p>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap items-center gap-4">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]"> Driving license
                                    (home country)</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Passport
                                            number <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <input type="text" name="passportno" id="passportno"
                                                autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                value="{{ $hasOldData2 && isset($oldData2->passportno) ? $oldData2->passportno : '' }}"
                                                required>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Expiry date
                                            <span class="text-Indicates">*</span></label>
                                        <div class="grid grid-cols-3 gap-1 Tablet:gap-2 dobdate relative"
                                            style="padding-bottom: 2rem">

                                            <div class="field">
                                                <select name="drving_lic_expiry_daye" id="drving_lic_expiry_day"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Day</option>
                                                    @for ($i = 1; $i <= 31; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $hasOldData3 && $oldData3->drving_lic_expiry_day == $i ? 'selected' : '' }}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select name="drving_lic_expiry_monthe" id="drving_lic_expiry_month"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Month</option>
                                                    @foreach ([1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'] as $monthNumber => $monthName)
                                                        <option value="{{ $monthNumber }}"
                                                            {{ $hasOldData3 && $oldData3->drving_lic_expiry_month == $monthNumber ? 'selected' : '' }}>
                                                            {{ $monthName }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select name="drving_lic_expiry_yeare" id="drving_lic_expiry_year"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none"
                                                    required>
                                                    <option value="">Year</option>
                                                    @for ($year = 2019; $year <= 2050; $year++)
                                                        <option value="{{ $year }}"
                                                            {{ $hasOldData3 && $oldData3->drving_lic_expiry_year == $year ? 'selected' : '' }}>
                                                            {{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>

                                            <div id="ddexpiryTime"
                                                style="position: absolute; left: 10px; bottom: 5px; margin-top: 10px">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap gap-4">


                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]"> Do you have UAE
                                    license</h2>
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">UAE license
                                            <span class="text-Indicates">*</span></label>
                                        <div class="field">
                                            <select name="have_uae_licence" id="have_uae_licence_id"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                required>
                                                <option
                                                    {{ $hasOldData3 && $oldData3->have_uae_licence == 'Yes' ? 'selected' : '' }}
                                                    value="Yes">Yes</option>
                                                <option
                                                    {{ $hasOldData3 && $oldData3->have_uae_licence == 'No' ? 'selected' : '' }}
                                                    value="No">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2"> UAE
                                            license number <span class="text-Indicates">*</span></label>
                                        <div class="field ">
                                            <input type="text" name="UAE_Resident_Visa_No"
                                                id="UAE_Resident_Visa_No" autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                value="{{ $hasOldData3 ? $oldData3->UAE_Resident_Visa_No : '' }}"
                                                required>
                                        </div>

                                    </div>

                                </div>


                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div class=" flex items-center gap-2" id="uae_licence_no_area"
                                        style="display: none;">
                                        <div>
                                            <label for="firstname"
                                                class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2"> UAE
                                                resident visa number <span class="text-Indicates">*</span></label>
                                            <div class="field ">
                                                <input type="tel" name="UAE_License_No" id="UAE_License_No"
                                                    autocomplete="off"
                                                    class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                    value="{{ $hasOldData3 ? $oldData3->UAE_License_No : '' }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div>
                                        <label for="firstname"
                                            class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Sim number
                                            (optional)</label>
                                        <div class="field ">
                                            <input type="tel" name="SIM_No" id="SIM_No" autocomplete="off"
                                                class="input-t Laptop:p-2 p-1.5 rounded-md border outline-none "
                                                value="{{ $hasOldData3 ? $oldData3->SIM_No : '' }}" required>
                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap ">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]"> Driving license
                                    images
                                </h2>
                                {{-- <img class="mt-2 w-10 Laptop:w-14"
                                src="{{ asset('frontend/imagesupdate/driving.svg') }}" alt=""> --}}
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 ">Driving
                                            license front <span class="text-Indicates">*</span></label>

                                        <div id="uploadAreaLicenseFront"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageLicenseFront"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkLicenseFront"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a>
                                                </p>
                                            </div>
                                        </div>
                                        <input type="file" name="appli_dri_lisence_frontparte"
                                            id="fileInputLicenseFront"
                                            value="{{ old('appli_dri_lisence_frontparte') }}" class="hidden"
                                            accept="image/*">
                                    </div>

                                    <div id="frontImag" style="display: none"></div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaLicenseFront = document.getElementById('uploadAreaLicenseFront');
                                            const uploadLinkLicenseFront = document.getElementById('uploadLinkLicenseFront');
                                            const fileInputLicenseFront = document.getElementById('fileInputLicenseFront');
                                            const previewImageLicenseFront = document.getElementById('previewImageLicenseFront');

                                            uploadAreaLicenseFront.addEventListener('click', function() {
                                                fileInputLicenseFront.click();
                                            });

                                            uploadLinkLicenseFront.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputLicenseFront.click();
                                            });

                                            fileInputLicenseFront.addEventListener('change', function() {
                                                if (fileInputLicenseFront.files.length > 0) {
                                                    const file = fileInputLicenseFront.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageLicenseFront.src = e.target.result;
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageLicenseFront.src = 'assets/Images/Vector.png';
                                                }
                                            });
                                        });
                                    </script>


                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">Driving
                                            license back <span class="text-Indicates">*</span></label>
                                        <div id="uploadAreaLicenseBack"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageLicenseBack"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkLicenseBack"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a>
                                                </p>
                                            </div>
                                        </div>
                                        <input type="file" name="appli_dri_lisence_backparte"
                                            value="{{ old('appli_dri_lisence_backparte') }}"
                                            id="fileInputLicenseBack" class="hidden" accept="image/*">
                                    </div>
                                    <div id="backImag" style="display: none"></div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaLicenseBack = document.getElementById('uploadAreaLicenseBack');
                                            const uploadLinkLicenseBack = document.getElementById('uploadLinkLicenseBack');
                                            const fileInputLicenseBack = document.getElementById('fileInputLicenseBack');
                                            const previewImageLicenseBack = document.getElementById('previewImageLicenseBack');

                                            uploadAreaLicenseBack.addEventListener('click', function() {
                                                fileInputLicenseBack.click();
                                            });

                                            uploadLinkLicenseBack.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputLicenseBack.click();
                                            });

                                            fileInputLicenseBack.addEventListener('change', function() {
                                                if (fileInputLicenseBack.files.length > 0) {
                                                    const file = fileInputLicenseBack.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageLicenseBack.src = e.target.result;
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageLicenseBack.src = 'assets/Images/Vector.png';
                                                }
                                            });
                                        });
                                    </script>

                                </div>

                            </div>


                        </div>


                        <div class="border-b py-4 Laptop:py-6 flex flex-wrap mb-4 ">

                            <div class="mbl-hdn Laptop:w-[20%]">
                                <h2 class="text-sm Laptop:text-base font-semibold leading-[29px]">UAE DL (optional)
                                </h2>
                                {{-- <img class="mt-2 w-10 Laptop:w-14"
                                src="{{ asset('frontend/imagesupdate/license.jpg') }}" alt=""> --}}
                            </div>

                            <div class="Laptop:w-[80%] w-full">

                                <div class="grid grid-cols-1 gap-2 Laptop:grid-cols-2 Laptop:gap-4">

                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2 ">UAE DL
                                            front <span class="text-Indicates">*</span></label>

                                        <div id="uploadAreaUAEDLFront"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageUAEDLFront"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkUAEDLFront"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a>
                                                </p>
                                            </div>
                                        </div>
                                        <input type="file" name="UAE_DL_Fronte" id="fileInputUAEDLFront"
                                            class="hidden" accept="image/*">
                                    </div>
                                    <div id="UAEfrontImag" style="display: none"></div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaUAEDLFront = document.getElementById('uploadAreaUAEDLFront');
                                            const uploadLinkUAEDLFront = document.getElementById('uploadLinkUAEDLFront');
                                            const fileInputUAEDLFront = document.getElementById('fileInputUAEDLFront');
                                            const previewImageUAEDLFront = document.getElementById('previewImageUAEDLFront');

                                            uploadAreaUAEDLFront.addEventListener('click', function() {
                                                fileInputUAEDLFront.click();
                                            });

                                            uploadLinkUAEDLFront.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputUAEDLFront.click();
                                            });

                                            fileInputUAEDLFront.addEventListener('change', function() {
                                                if (fileInputUAEDLFront.files.length > 0) {
                                                    const file = fileInputUAEDLFront.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageUAEDLFront.src = e.target.result;
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageUAEDLFront.src = 'assets/Images/Vector.png';
                                                }
                                            });
                                        });
                                    </script>



                                    <div>
                                        <label class="text-xs Laptop:text-sm font-medium leading-[29px]  mb-2">UAE DL
                                            Back <span class="text-Indicates">*</span></label>

                                        <div id="uploadAreaUAEDLBack"
                                            class="field border-dashed border border-[#b3b3b3] p-3 Laptop:py-5 rounded cursor-pointer">
                                            <div class="text-center">
                                                <img id="previewImageUAEDLBack"
                                                    class="w-8 Laptop:w-10 text-center mx-auto mb-2"
                                                    src="{{ asset('frontend/imagesupdate/Vector.png') }}"
                                                    alt="">
                                                <p class="text-xs Laptop:text-base font-medium leading-6">Drop File
                                                    here <br>
                                                    or <a href="#" id="uploadLinkUAEDLBack"
                                                        class="text-Primary-c underline underline-offset-2">Upload
                                                        File</a>
                                                </p>
                                            </div>
                                        </div>
                                        <input type="file" name="UAE_DL_Backe" id="fileInputUAEDLBack"
                                            class="hidden" accept="image/*">
                                    </div>
                                    <div id="UAEbackImag" style="display: none"></div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const uploadAreaUAEDLBack = document.getElementById('uploadAreaUAEDLBack');
                                            const uploadLinkUAEDLBack = document.getElementById('uploadLinkUAEDLBack');
                                            const fileInputUAEDLBack = document.getElementById('fileInputUAEDLBack');
                                            const previewImageUAEDLBack = document.getElementById('previewImageUAEDLBack');

                                            uploadAreaUAEDLBack.addEventListener('click', function() {
                                                fileInputUAEDLBack.click();
                                            });

                                            uploadLinkUAEDLBack.addEventListener('click', function(event) {
                                                event.preventDefault();
                                                fileInputUAEDLBack.click();
                                            });

                                            fileInputUAEDLBack.addEventListener('change', function() {
                                                if (fileInputUAEDLBack.files.length > 0) {
                                                    const file = fileInputUAEDLBack.files[0];
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        previewImageUAEDLBack.src = e.target.result;
                                                    }

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    previewImageUAEDLBack.src = 'assets/Images/Vector.png';
                                                }
                                            });
                                        });
                                    </script>

                                </div>

                            </div>


                        </div>

                        {{-- // --}}

                        <div class="div text-right mt-10">
                            <input type="checkbox" id="show-agreement-btn" required style="margin-top: 20px;"> <label
                                for="show-agreement-btn">I Accept the <span style="color: #1f76e1;">Terms and
                                    Condition</span> of the Company</label>
                        </div>


                        <style>
                            label {
                                margin-bottom: 10px !important;
                            }
                        </style>


                        <div class="box" style="margin-top: 15px;">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>

                        <!-- ----  -->

                        <style>
                            /* Style for increasing the size of the checkbox */
                            #show-agreement-btn {
                                width: 12px;
                                /* Increase the width */
                                height: 12px;
                                /* Increase the height */
                                transform: scale(1.5);
                                /* Scale the checkbox */
                                margin-top: 20px;
                                /* Adjust the margin to align properly */
                                -webkit-appearance: none;
                                /* Remove default styling in WebKit browsers */
                                -moz-appearance: none;
                                /* Remove default styling in Firefox */
                                appearance: none;
                                /* Remove default styling */
                                border: 2px solid #ccc;
                                /* Add a border */
                                border-radius: 4px;
                                /* Round the corners */
                                position: relative;
                                /* Allow positioning of the checkmark */
                                outline: none;
                                /* Remove default outline */
                                margin-right: 3px;
                            }

                            #show-agreement-btn:checked {
                                background-color: #1f76e1;
                                /* Change background color when checked */
                                border-color: #1f76e1;
                                /* Change border color when checked */
                            }

                            #show-agreement-btn:checked::after {

                                /* Unicode checkmark character */
                                font-size: 14px;
                                /* Adjust checkmark size */
                                color: white;
                                /* Checkmark color */
                                position: absolute;
                                /* Position checkmark absolutely */
                                top: 2px;
                                /* Adjust positioning */
                                left: 3px;
                                /* Adjust positioning */
                            }
                        </style>

                        <div class="button text-right Laptop:mt-10 mt-4 pb-4 ">
                            <button type="button" id="previous3"
                                class="previous Laptop:px-10 Laptop:py-3 px-4 py-2 text-xs Laptop:text-base bg-Black-c text-White-c rounded-2xl leading-5 mr-4">
                                Previous
                            </button>

                            <button type="button"
                                class="action-button next Laptop:py-3 py-2 text-xs Laptop:text-base bg-Primary-c text-White-c rounded-2xl leading-5"
                                style="width: 150px" id="f3Button">
                                <span class="btn-text close">Save & Confirm</span>
                            </button>
                        </div>
                    </fieldset>
                </form>


            </div>
        </div>
    </div>
</body>

<!-- Load intl-tel-input library -->
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

<!-- Load intlTelInputUtils utility script -->
<script src="//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"></script>

<script>
    // Function to initialize intl-tel-input
    function initializeIntlTelInput(elementId, localStorageKey) {
        var inputElement = document.querySelector("#" + elementId);
        var intlTel = window.intlTelInput(inputElement, {
            separateDialCode: true,
            preferredCountries: ["ae"],
            hiddenInput: "full",
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        // Retrieve previously selected country code from localStorage
        var prevSelectedCountry = localStorage.getItem(localStorageKey);
        if (prevSelectedCountry) {
            intlTel.setCountry(prevSelectedCountry);
        }

        // Handle change event for the input
        function handleChange() {
            var fullNumber = intlTel.getNumber(intlTelInputUtils.numberFormat.E164);
            $("input[name='" + elementId + "']").val(fullNumber);

            // Store current selected country in localStorage
            var selectedCountry = intlTel.getSelectedCountryData().iso2;
            localStorage.setItem(localStorageKey, selectedCountry);
        }

        // Execute handleChange() once immediately on page load
        handleChange();

        // Bind change event listener to inputElement
        inputElement.addEventListener('change', handleChange);
    }

    // Initialize intl-tel-input for contact_number and whatsapp_number
    document.addEventListener('DOMContentLoaded', function() {
        initializeIntlTelInput("contact_number", 'prevSelectedCountryPhone');
        initializeIntlTelInput("whatsapp_number", 'prevSelectedCountryWhatsapp');
    });
</script>




<!-- UAE Residence yes or now -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectElement = document.querySelector('.YesNo select');
        const residenceYes = document.getElementById('residence-yes');
        const residenceNo = document.getElementById('residence-no');

        function toggleResidenceSections() {
            if (selectElement.value === 'Yes') {
                residenceYes.classList.remove('hidden');
                residenceNo.classList.add('hidden');
            } else {
                residenceYes.classList.add('hidden');
                residenceNo.classList.remove('hidden');
            }
        }

        selectElement.addEventListener('change', toggleResidenceSections);

        // Initial state
        toggleResidenceSections();
    });
</script>

<!-- UAE Residence ID Number formate-->
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

<!-- For natiliaty, city state show hide  -->
<script>
    @php
        $hasOldState = $hasOldData2 && isset($oldData2) && isset($oldData2->province) ? true : false;
        $hasOldCity = $hasOldData2 && isset($oldData2) && isset($oldData2->city) ? true : false;
        $oldProvince = isset($oldData2) && isset($oldData2->province) ? $oldData2->province : '';
        $oldCity = isset($oldData2) && isset($oldData2->city) ? $oldData2->city : '';
    @endphp
    document.addEventListener('DOMContentLoaded', function() {
        const nationalitySelect = document.getElementById('nationality');
        const stateProvinceSelect = document.getElementById('stateProvince');
        const cityDistrictSelect = document.getElementById('cityDistrict');
        const policeStationSelect = document.getElementById('policeStation');
        const postCodeSelect = document.getElementById('postCode');
        const hasOldState = @json($hasOldState);
        const oldState = @json($oldProvince);
        const hasOldCity = @json($hasOldCity);
        const oldCity = @json($oldCity);

        const data = {
            "Pakistan": {
                "Azad Jammu and Kashmir": {
                    "cities": {
                        "Muzaffarabad": {},
                        "Mirpur": {},
                        "Kotli": {},
                        "Rawalakot": {},
                        "Bagh": {}
                    }
                },
                "Balochistan": {
                    "cities": {
                        "Quetta": {},
                        "Khuzdar": {},
                        "Turbat": {},
                        "Sibi": {},
                        "Gwadar": {},
                        "Chaman": {},
                        "Zhob": {},
                        "Loralai": {},
                        "Dera Murad Jamali": {},
                        "Hub": {},
                        "Kalat": {},
                        "Pishin": {},
                        "Kharan": {},
                        "Ziarat": {},
                        "Mastung": {},
                        "Chaghi": {},
                        "Awaran": {},
                        "Barkhan": {},
                        "Bolan": {},
                        "Dera Bugti": {},
                        "Jafarabad": {},
                        "Jhal Magsi": {},
                        "Kachhi": {},
                        "Killa Abdullah": {},
                        "Killa Saifullah": {},
                        "Kohlu": {},
                        "Lasbela": {},
                        "Lehri": {},
                        "Musakhel": {},
                        "Nasirabad": {},
                        "Nushki": {},
                        "Panjgur": {},
                        "Sherani": {},
                        "Sohbatpur": {},
                        "Washuk": {},
                        "Kech": {},
                        "Harnai": {}
                    }
                },
                "Gilgit-Baltistan": {
                    "cities": {
                        "Gilgit": {},
                        "Skardu": {},
                        "Diamer": {},
                        "Ghanche": {},
                        "Ghizer": {},
                        "Hunza": {},
                        "Nagar": {},
                        "Shigar": {},
                        "Kharmang": {}
                    }
                },
                "Islamabad Capital Territory": {
                    "cities": {
                        "Islamabad": {}
                    }
                },
                "Khyber Pakhtunkhwa": {
                    "cities": {
                        "Peshawar": {},
                        "Mardan": {},
                        "Chitral": {},
                        "Batkhela": {},
                        "Saidu Sharif": {},
                        "Mansehra": {},
                        "Haripur": {},
                        "Abbottabad": {},
                        "Swabi": {},
                        "Nowshera": {},
                        "Charsadda": {},
                        "Kohat": {},
                        "Karak": {},
                        "Bannu": {},
                        "Dera Ismail Khan": {},
                        "Tank": {},
                        "Hangu": {},
                        "Kurram": {},
                        "Lakki Marwat": {},
                        "Malakand": {},
                        "Torghar": {},
                        "Bajaur": {},
                        "Mohmand": {},
                        "Orakzai": {},
                        "Khyber": {},
                        "South Waziristan": {},
                        "North Waziristan": {}
                    }
                },
                "Punjab": {
                    "cities": {
                        "Lahore": {},
                        "Faisalabad": {},
                        "Bhakkar": {},
                        "Layyah": {},
                        "Dera Ghazi Khan": {},
                        "Muzaffargarh": {},
                        "Jhang": {},
                        "Toba Tek Singh": {},
                        "Qila Sheikhupura": {},
                        "Sargodha": {},
                        "Khushab": {},
                        "Mianwali": {},
                        "Attock": {},
                        "Rawalpindi": {},
                        "Wah Cantt": {},
                        "Murree": {},
                        "Gujar Khan": {},
                        "Talagang": {},
                        "Chakwal": {},
                        "Jhelum": {},
                        "Gujrat": {},
                        "Mandi Bahauddin": {},
                        "Sialkot": {},
                        "Narowal": {},
                        "Kasur": {},
                        "Okara": {},
                        "Sahiwal": {},
                        "Multan": {},
                        "Bahawalpur": {},
                        "Vehari": {},
                        "Bahawalnagar": {},
                        "Rahim Yar Khan": {},
                        "Chiniot": {},
                        "Pakpattan": {},
                        "Hafizabad": {},
                        "Nankana Sahib": {}
                    }
                },
                "Sindh": {
                    "cities": {
                        "Karachi": {},
                        "Hyderabad": {},
                        "Sukkur": {},
                        "Larkana": {},
                        "Mirpur Khas": {},
                        "Nawabshah": {},
                        "Jacobabad": {},
                        "Khairpur": {},
                        "Ghotki": {},
                        "Shikarpur": {},
                        "Dadu": {},
                        "Umerkot": {},
                        "Tharparkar": {},
                        "Kashmore": {},
                        "Qambar Shahdadkot": {},
                        "Matiari": {},
                        "Tando Allahyar": {},
                        "Tando Muhammad Khan": {},
                        "Jamshoro": {},
                        "Sujawal": {},
                        "Badin": {}
                    }
                }
            },
            "Nepal": {
                "Biratnagar": {
                    "cities": {
                        "Bhojpur": {},
                        "Dhankuta": {},
                        "Ilam": {},
                        "Jhapa": {},
                        "Khotang": {},
                        "Morang": {},
                        "Okhaldhunga": {},
                        "Panchthar": {},
                        "Sankhuwasabha": {},
                        "Solukhumbu": {},
                        "Sunsari": {},
                        "Taplejung": {},
                        "Terhathum": {},
                        "Udayapur": {}
                    }
                },
                "Janakpur": {
                    "cities": {
                        "Saptari": {},
                        "Siraha": {},
                        "Dhanusa": {},
                        "Mahottari": {},
                        "Sarlahi": {},
                        "Bara": {},
                        "Rautahat": {}
                    }
                },
                "Hetauda": {
                    "cities": {
                        "Sindhuli": {},
                        "Ramechhap": {},
                        "Dolakha": {},
                        "Bhaktapur": {},
                        "Dhading": {},
                        "Kathmandu": {},
                        "Kavrepalanchok": {},
                        "Lalitpur": {},
                        "Nuwakot": {},
                        "Rasuwa": {},
                        "Sindhupalchok": {},
                        "Chitwan": {},
                        "Makwanpur": {}
                    }
                },
                "Pokhara": {
                    "cities": {
                        "Baglung": {},
                        "Gorkha": {},
                        "Kaski": {},
                        "Lamjung": {},
                        "Manang": {},
                        "Mustang": {},
                        "Myagdi": {},
                        "Nawalpur": {},
                        "Parbat": {},
                        "Syangja": {},
                        "Tanahun": {}
                    }
                },
                "Butwal": {
                    "cities": {
                        "Kapilvastu": {},
                        "Parasi": {},
                        "Rupandehi": {},
                        "Arghakhanchi": {},
                        "Gulmi": {},
                        "Palpa": {},
                        "Dang": {},
                        "Pyuthan": {},
                        "Rolpa": {},
                        "Eastern Rukum": {},
                        "Banke": {},
                        "Bardiya": {}
                    }
                },
                "Birendranagar": {
                    "cities": {
                        "Western Rukum": {},
                        "Salyan": {},
                        "Dolpa": {},
                        "Humla": {},
                        "Jumla": {},
                        "Kalikot": {},
                        "Mugu": {},
                        "Surkhet": {},
                        "Dailekh": {},
                        "Jajarkot": {}
                    }
                },
                "Godawari": {
                    "cities": {
                        "Kailali": {},
                        "Achham": {},
                        "Doti": {},
                        "Bajhang": {},
                        "Bajura": {},
                        "Kanchanpur": {},
                        "Dadeldhura": {},
                        "Baitadi": {},
                        "Darchula": {}
                    }
                }
            },
            "India": {
                "Andhra Pradesh": {
                    "districts": {
                        "Anantapur": {},
                        "Chittoor": {},
                        "East Godavari": {},
                        "Guntur": {},
                        "Krishna": {},
                        "Kurnool": {},
                        "Nellore": {},
                        "Prakasam": {},
                        "Srikakulam": {},
                        "Visakhapatnam": {},
                        "Vizianagaram": {},
                        "West Godavari": {},
                        "YSR Kadapa": {}
                    }
                },
                "Arunachal Pradesh": {
                    "districts": {
                        "Anjaw": {},
                        "Changlang": {},
                        "Dibang Valley": {},
                        "East Kameng": {},
                        "East Siang": {},
                        "Kamle": {},
                        "Kra Daadi": {},
                        "Kurung Kumey": {},
                        "Lepa Rada": {},
                        "Lohit": {},
                        "Longding": {},
                        "Lower Dibang Valley": {},
                        "Lower Siang": {},
                        "Lower Subansiri": {},
                        "Namsai": {},
                        "Pakke Kessang": {},
                        "Papum Pare": {},
                        "Shi Yomi": {},
                        "Siang": {},
                        "Tawang": {},
                        "Tirap": {},
                        "Upper Siang": {},
                        "Upper Subansiri": {},
                        "West Kameng": {},
                        "West Siang": {}
                    }
                },
                "Assam": {
                    "districts": {
                        "Baksa": {},
                        "Barpeta": {},
                        "Biswanath": {},
                        "Bongaigaon": {},
                        "Cachar": {},
                        "Charaideo": {},
                        "Chirang": {},
                        "Darrang": {},
                        "Dhemaji": {},
                        "Dhubri": {},
                        "Dibrugarh": {},
                        "Goalpara": {},
                        "Golaghat": {},
                        "Hailakandi": {},
                        "Hojai": {},
                        "Jorhat": {},
                        "Kamrup": {},
                        "Kamrup Metropolitan": {},
                        "Karbi Anglong": {},
                        "Karimganj": {},
                        "Kokrajhar": {},
                        "Lakhimpur": {},
                        "Majuli": {},
                        "Morigaon": {},
                        "Nagaon": {},
                        "Nalbari": {},
                        "Sivasagar": {},
                        "Sonitpur": {},
                        "South Salmara-Mankachar": {},
                        "Tinsukia": {},
                        "Udalguri": {},
                        "West Karbi Anglong": {}
                    }
                },
                "Bihar": {
                    "districts": {
                        "Araria": {},
                        "Arwal": {},
                        "Aurangabad": {},
                        "Banka": {},
                        "Begusarai": {},
                        "Bhagalpur": {},
                        "Bhojpur": {},
                        "Buxar": {},
                        "Darbhanga": {},
                        "East Champaran": {},
                        "Gaya": {},
                        "Gopalganj": {},
                        "Jamui": {},
                        "Jehanabad": {},
                        "Kaimur": {},
                        "Katihar": {},
                        "Khagaria": {},
                        "Kishanganj": {},
                        "Lakhisarai": {},
                        "Madhepura": {},
                        "Madhubani": {},
                        "Munger": {},
                        "Muzaffarpur": {},
                        "Nalanda": {},
                        "Nawada": {},
                        "Patna": {},
                        "Purnia": {},
                        "Rohtas": {},
                        "Saharsa": {},
                        "Samastipur": {},
                        "Saran": {},
                        "Sheikhpura": {},
                        "Sheohar": {},
                        "Sitamarhi": {},
                        "Siwan": {},
                        "Supaul": {},
                        "Vaishali": {},
                        "West Champaran": {}
                    }
                },
                "Chhattisgarh": {
                    "districts": {
                        "Balod": {},
                        "Baloda Bazar": {},
                        "Balrampur": {},
                        "Bastar": {},
                        "Bemetara": {},
                        "Bijapur": {},
                        "Bilaspur": {},
                        "Dantewada": {},
                        "Dhamtari": {},
                        "Durg": {},
                        "Gariaband": {},
                        "Gaurela-Pendra-Marwahi": {},
                        "Janjgir-Champa": {},
                        "Jashpur": {},
                        "Kabirdham": {},
                        "Kanker": {},
                        "Kondagaon": {},
                        "Korba": {},
                        "Koriya": {},
                        "Mahasamund": {},
                        "Mungeli": {},
                        "Narayanpur": {},
                        "Raigarh": {},
                        "Raipur": {},
                        "Rajnandgaon": {},
                        "Sukma": {},
                        "Surajpur": {},
                        "Surguja": {}
                    }
                },
                "Goa": {
                    "districts": {
                        "North Goa": {},
                        "South Goa": {}
                    }
                },
                "Gujarat": {
                    "districts": {
                        "Ahmedabad": {},
                        "Amreli": {},
                        "Anand": {},
                        "Aravalli": {},
                        "Banaskantha": {},
                        "Bharuch": {},
                        "Bhavnagar": {},
                        "Botad": {},
                        "Chhota Udaipur": {},
                        "Dahod": {},
                        "Dang": {},
                        "Devbhoomi Dwarka": {},
                        "Gandhinagar": {},
                        "Gir Somnath": {},
                        "Jamnagar": {},
                        "Junagadh": {},
                        "Kheda": {},
                        "Kutch": {},
                        "Mahisagar": {},
                        "Mehsana": {},
                        "Morbi": {},
                        "Narmada": {},
                        "Navsari": {},
                        "Panchmahal": {},
                        "Patan": {},
                        "Porbandar": {},
                        "Rajkot": {},
                        "Sabarkantha": {},
                        "Surat": {},
                        "Surendranagar": {},
                        "Tapi": {},
                        "Vadodara": {},
                        "Valsad": {}
                    }
                },
                "Haryana": {
                    "districts": {
                        "Ambala": {},
                        "Bhiwani": {},
                        "Charkhi Dadri": {},
                        "Faridabad": {},
                        "Fatehabad": {},
                        "Gurugram": {},
                        "Hisar": {},
                        "Jhajjar": {},
                        "Jind": {},
                        "Kaithal": {},
                        "Karnal": {},
                        "Kurukshetra": {},
                        "Mahendragarh": {},
                        "Nuh": {},
                        "Palwal": {},
                        "Panchkula": {},
                        "Panipat": {},
                        "Rewari": {},
                        "Rohtak": {},
                        "Sirsa": {},
                        "Sonipat": {},
                        "Yamunanagar": {}
                    }
                },
                "Himachal Pradesh": {
                    "districts": {
                        "Bilaspur": {},
                        "Chamba": {},
                        "Hamirpur": {},
                        "Kangra": {},
                        "Kinnaur": {},
                        "Kullu": {},
                        "Lahaul and Spiti": {},
                        "Mandi": {},
                        "Shimla": {},
                        "Sirmaur": {},
                        "Solan": {},
                        "Una": {}
                    }
                },
                "Jharkhand": {
                    "districts": {
                        "Bokaro": {},
                        "Chatra": {},
                        "Deoghar": {},
                        "Dhanbad": {},
                        "Dumka": {},
                        "East Singhbhum": {},
                        "Garhwa": {},
                        "Giridih": {},
                        "Godda": {},
                        "Gumla": {},
                        "Hazaribagh": {},
                        "Jamtara": {},
                        "Khunti": {},
                        "Koderma": {},
                        "Latehar": {},
                        "Lohardaga": {},
                        "Pakur": {},
                        "Palamu": {},
                        "Ramgarh": {},
                        "Ranchi": {},
                        "Sahebganj": {},
                        "Seraikela Kharsawan": {},
                        "Simdega": {},
                        "West Singhbhum": {}
                    }
                },
                "Karnataka": {
                    "districts": {
                        "Bagalkot": {},
                        "Ballari": {},
                        "Belagavi": {},
                        "Bengaluru Rural": {},
                        "Bengaluru Urban": {},
                        "Bidar": {},
                        "Chamarajanagar": {},
                        "Chikballapur": {},
                        "Chikkamagaluru": {},
                        "Chitradurga": {},
                        "Dakshina Kannada": {},
                        "Davanagere": {},
                        "Dharwad": {},
                        "Gadag": {},
                        "Hassan": {},
                        "Haveri": {},
                        "Kalaburagi": {},
                        "Kodagu": {},
                        "Kolar": {},
                        "Koppal": {},
                        "Mandya": {},
                        "Mysuru": {},
                        "Raichur": {},
                        "Ramanagara": {},
                        "Shivamogga": {},
                        "Tumakuru": {},
                        "Udupi": {},
                        "Uttara Kannada": {},
                        "Vijayapura": {},
                        "Yadgir": {}
                    }
                },
                "Kerala": {
                    "districts": {
                        "Alappuzha": {},
                        "Ernakulam": {},
                        "Idukki": {},
                        "Kannur": {},
                        "Kasaragod": {},
                        "Kollam": {},
                        "Kottayam": {},
                        "Kozhikode": {},
                        "Malappuram": {},
                        "Palakkad": {},
                        "Pathanamthitta": {},
                        "Thiruvananthapuram": {},
                        "Thrissur": {},
                        "Wayanad": {}
                    }
                },
                "Madhya Pradesh": {
                    "districts": {
                        "Agar Malwa": {},
                        "Alirajpur": {},
                        "Anuppur": {},
                        "Ashoknagar": {},
                        "Balaghat": {},
                        "Barwani": {},
                        "Betul": {},
                        "Bhind": {},
                        "Bhopal": {},
                        "Burhanpur": {},
                        "Chhatarpur": {},
                        "Chhindwara": {},
                        "Damoh": {},
                        "Datia": {},
                        "Dewas": {},
                        "Dhar": {},
                        "Dindori": {},
                        "Guna": {},
                        "Gwalior": {},
                        "Harda": {},
                        "Hoshangabad": {},
                        "Indore": {},
                        "Jabalpur": {},
                        "Jhabua": {},
                        "Katni": {},
                        "Khandwa": {},
                        "Khargone": {},
                        "Mandla": {},
                        "Mandsaur": {},
                        "Morena": {},
                        "Narsinghpur": {},
                        "Neemuch": {},
                        "Niwari": {},
                        "Panna": {},
                        "Raisen": {},
                        "Rajgarh": {},
                        "Ratlam": {},
                        "Rewa": {},
                        "Sagar": {},
                        "Satna": {},
                        "Sehore": {},
                        "Seoni": {},
                        "Shahdol": {},
                        "Shajapur": {},
                        "Sheopur": {},
                        "Shivpuri": {},
                        "Sidhi": {},
                        "Singrauli": {},
                        "Tikamgarh": {},
                        "Ujjain": {},
                        "Umaria": {},
                        "Vidisha": {}
                    }
                },
                "Maharashtra": {
                    "districts": {
                        "Ahmednagar": {},
                        "Akola": {},
                        "Amravati": {},
                        "Aurangabad": {},
                        "Beed": {},
                        "Bhandara": {},
                        "Buldhana": {},
                        "Chandrapur": {},
                        "Dhule": {},
                        "Gadchiroli": {},
                        "Gondia": {},
                        "Hingoli": {},
                        "Jalgaon": {},
                        "Jalna": {},
                        "Kolhapur": {},
                        "Latur": {},
                        "Mumbai City": {},
                        "Mumbai Suburban": {},
                        "Nagpur": {},
                        "Nanded": {},
                        "Nandurbar": {},
                        "Nashik": {},
                        "Osmanabad": {},
                        "Palghar": {},
                        "Parbhani": {},
                        "Pune": {},
                        "Raigad": {},
                        "Ratnagiri": {},
                        "Sangli": {},
                        "Satara": {},
                        "Sindhudurg": {},
                        "Solapur": {},
                        "Thane": {},
                        "Wardha": {},
                        "Washim": {},
                        "Yavatmal": {}
                    }
                },
                "Manipur": {
                    "districts": {
                        "Bishnupur": {},
                        "Chandel": {},
                        "Churachandpur": {},
                        "Imphal East": {},
                        "Imphal West": {},
                        "Jiribam": {},
                        "Kakching": {},
                        "Kamjong": {},
                        "Kangpokpi": {},
                        "Noney": {},
                        "Pherzawl": {},
                        "Senapati": {},
                        "Tamenglong": {},
                        "Tengnoupal": {},
                        "Thoubal": {},
                        "Ukhrul": {}
                    }
                },
                "Meghalaya": {
                    "districts": {
                        "East Garo Hills": {},
                        "East Jaintia Hills": {},
                        "East Khasi Hills": {},
                        "North Garo Hills": {},
                        "Ri Bhoi": {},
                        "South Garo Hills": {},
                        "South West Garo Hills": {},
                        "South West Khasi Hills": {},
                        "West Garo Hills": {},
                        "West Jaintia Hills": {},
                        "West Khasi Hills": {}
                    }
                },
                "Mizoram": {
                    "districts": {
                        "Aizawl": {},
                        "Champhai": {},
                        "Hnahthial": {},
                        "Khawzawl": {},
                        "Kolasib": {},
                        "Lawngtlai": {},
                        "Lunglei": {},
                        "Mamit": {},
                        "Saiha": {},
                        "Saitual": {},
                        "Serchhip": {}
                    }
                },
                "Nagaland": {
                    "districts": {
                        "Dimapur": {},
                        "Kiphire": {},
                        "Kohima": {},
                        "Longleng": {},
                        "Mokokchung": {},
                        "Mon": {},
                        "Noklak": {},
                        "Peren": {},
                        "Phek": {},
                        "Tuensang": {},
                        "Wokha": {},
                        "Zunheboto": {}
                    }
                },
                "Odisha": {
                    "districts": {
                        "Angul": {},
                        "Balangir": {},
                        "Balasore": {},
                        "Bargarh": {},
                        "Bhadrak": {},
                        "Boudh": {},
                        "Cuttack": {},
                        "Debagarh": {},
                        "Dhenkanal": {},
                        "Gajapati": {},
                        "Ganjam": {},
                        "Jagatsinghpur": {},
                        "Jajpur": {},
                        "Jharsuguda": {},
                        "Kalahandi": {},
                        "Kandhamal": {},
                        "Kendrapara": {},
                        "Kendujhar": {},
                        "Khordha": {},
                        "Koraput": {},
                        "Malkangiri": {},
                        "Mayurbhanj": {},
                        "Nabarangpur": {},
                        "Nayagarh": {},
                        "Nuapada": {},
                        "Puri": {},
                        "Rayagada": {},
                        "Sambalpur": {},
                        "Subarnapur": {},
                        "Sundergarh": {}
                    }
                },
                "Punjab": {
                    "districts": {
                        "Amritsar": {},
                        "Barnala": {},
                        "Bathinda": {},
                        "Faridkot": {},
                        "Fatehgarh Sahib": {},
                        "Fazilka": {},
                        "Ferozepur": {},
                        "Gurdaspur": {},
                        "Hoshiarpur": {},
                        "Jalandhar": {},
                        "Kapurthala": {},
                        "Ludhiana": {},
                        "Mansa": {},
                        "Moga": {},
                        "Pathankot": {},
                        "Patiala": {},
                        "Rupnagar": {},
                        "Sangrur": {},
                        "Shaheed Bhagat Singh Nagar": {},
                        "Sri Muktsar Sahib": {},
                        "Tarn Taran": {}
                    }
                },
                "Rajasthan": {
                    "districts": {
                        "Ajmer": {},
                        "Alwar": {},
                        "Banswara": {},
                        "Baran": {},
                        "Barmer": {},
                        "Bharatpur": {},
                        "Bhilwara": {},
                        "Bikaner": {},
                        "Bundi": {},
                        "Chittorgarh": {},
                        "Churu": {},
                        "Dausa": {},
                        "Dholpur": {},
                        "Dungarpur": {},
                        "Hanumangarh": {},
                        "Jaipur": {},
                        "Jaisalmer": {},
                        "Jalore": {},
                        "Jhalawar": {},
                        "Jhunjhunu": {},
                        "Jodhpur": {},
                        "Karauli": {},
                        "Kota": {},
                        "Nagaur": {},
                        "Pali": {},
                        "Pratapgarh": {},
                        "Rajsamand": {},
                        "Sawai Madhopur": {},
                        "Sikar": {},
                        "Sirohi": {},
                        "Sri Ganganagar": {},
                        "Tonk": {},
                        "Udaipur": {}
                    }
                },
                "Sikkim": {
                    "districts": {
                        "East Sikkim": {},
                        "North Sikkim": {},
                        "South Sikkim": {},
                        "West Sikkim": {}
                    }
                },
                "Tamil Nadu": {
                    "districts": {
                        "Ariyalur": {},
                        "Chengalpattu": {},
                        "Chennai": {},
                        "Coimbatore": {},
                        "Cuddalore": {},
                        "Dharmapuri": {},
                        "Dindigul": {},
                        "Erode": {},
                        "Kallakurichi": {},
                        "Kancheepuram": {},
                        "Karur": {},
                        "Krishnagiri": {},
                        "Madurai": {},
                        "Mayiladuthurai": {},
                        "Nagapattinam": {},
                        "Namakkal": {},
                        "Nilgiris": {},
                        "Perambalur": {},
                        "Pudukkottai": {},
                        "Ramanathapuram": {},
                        "Ranipet": {},
                        "Salem": {},
                        "Sivaganga": {},
                        "Tenkasi": {},
                        "Thanjavur": {},
                        "Theni": {},
                        "Thoothukudi": {},
                        "Tiruchirappalli": {},
                        "Tirunelveli": {},
                        "Tirupattur": {},
                        "Tiruppur": {},
                        "Tiruvallur": {},
                        "Tiruvannamalai": {},
                        "Tiruvarur": {},
                        "Vellore": {},
                        "Viluppuram": {},
                        "Virudhunagar": {}
                    }
                },
                "Telangana": {
                    "districts": {
                        "Adilabad": {},
                        "Bhadradri Kothagudem": {},
                        "Hyderabad": {},
                        "Jagtial": {},
                        "Jangaon": {},
                        "Jayashankar Bhupalpally": {},
                        "Jogulamba Gadwal": {},
                        "Kamareddy": {},
                        "Karimnagar": {},
                        "Khammam": {},
                        "Komaram Bheem Asifabad": {},
                        "Mahabubabad": {},
                        "Mahbubnagar": {},
                        "Mancherial": {},
                        "Medak": {},
                        "Medchal-Malkajgiri": {},
                        "Mulugu": {},
                        "Nagarkurnool": {},
                        "Nalgonda": {},
                        "Narayanpet": {},
                        "Nirmal": {},
                        "Nizamabad": {},
                        "Peddapalli": {},
                        "Rajanna Sircilla": {},
                        "Ranga Reddy": {},
                        "Sangareddy": {},
                        "Siddipet": {},
                        "Suryapet": {},
                        "Vikarabad": {},
                        "Wanaparthy": {},
                        "Warangal (Rural)": {},
                        "Warangal (Urban)": {},
                        "Yadadri Bhuvanagiri": {}
                    }
                },
                "Tripura": {
                    "districts": {
                        "Dhalai": {},
                        "Gomati": {},
                        "Khowai": {},
                        "North Tripura": {},
                        "Sepahijala": {},
                        "South Tripura": {},
                        "Unakoti": {},
                        "West Tripura": {}
                    }
                },
                "Uttar Pradesh": {
                    "districts": {
                        "Agra": {},
                        "Aligarh": {},
                        "Ambedkar Nagar": {},
                        "Amethi": {},
                        "Amroha": {},
                        "Auraiya": {},
                        "Ayodhya": {},
                        "Azamgarh": {},
                        "Badaun": {},
                        "Baghpat": {},
                        "Bahraich": {},
                        "Ballia": {},
                        "Balrampur": {},
                        "Banda": {},
                        "Barabanki": {},
                        "Bareilly": {},
                        "Basti": {},
                        "Bhadohi": {},
                        "Bijnor": {},
                        "Bulandshahr": {},
                        "Chandauli": {},
                        "Chitrakoot": {},
                        "Deoria": {},
                        "Etah": {},
                        "Etawah": {},
                        "Farrukhabad": {},
                        "Fatehpur": {},
                        "Firozabad": {},
                        "Gautam Buddh Nagar": {},
                        "Ghaziabad": {},
                        "Ghazipur": {},
                        "Gonda": {},
                        "Gorakhpur": {},
                        "Hamirpur": {},
                        "Hapur": {},
                        "Hardoi": {},
                        "Hathras": {},
                        "Jalaun": {},
                        "Jaunpur": {},
                        "Jhansi": {},
                        "Kannauj": {},
                        "Kanpur Dehat": {},
                        "Kanpur Nagar": {},
                        "Kasganj": {},
                        "Kaushambi": {},
                        "Kheri": {},
                        "Kushinagar": {},
                        "Lalitpur": {},
                        "Lucknow": {},
                        "Maharajganj": {},
                        "Mahoba": {},
                        "Mainpuri": {},
                        "Mathura": {},
                        "Mau": {},
                        "Meerut": {},
                        "Mirzapur": {},
                        "Moradabad": {},
                        "Muzaffarnagar": {},
                        "Pilibhit": {},
                        "Pratapgarh": {},
                        "Rae Bareli": {},
                        "Rampur": {},
                        "Saharanpur": {},
                        "Sambhal": {},
                        "Sant Kabir Nagar": {},
                        "Shahjahanpur": {},
                        "Shamli": {},
                        "Shrawasti": {},
                        "Siddharthnagar": {},
                        "Sitapur": {},
                        "Sonbhadra": {},
                        "Sultanpur": {},
                        "Unnao": {},
                        "Varanasi": {}
                    }
                },
                "Uttarakhand": {
                    "districts": {
                        "Almora": {},
                        "Bageshwar": {},
                        "Chamoli": {},
                        "Champawat": {},
                        "Dehradun": {},
                        "Haridwar": {},
                        "Nainital": {},
                        "Pauri Garhwal": {},
                        "Pithoragarh": {},
                        "Rudraprayag": {},
                        "Tehri Garhwal": {},
                        "Udham Singh Nagar": {},
                        "Uttarkashi": {}
                    }
                },
                "West Bengal": {
                    "districts": {
                        "Alipurduar": {},
                        "Bankura": {},
                        "Birbhum": {},
                        "Cooch Behar": {},
                        "Dakshin Dinajpur": {},
                        "Darjeeling": {},
                        "Hooghly": {},
                        "Howrah": {},
                        "Jalpaiguri": {},
                        "Jhargram": {},
                        "Kalimpong": {},
                        "Kolkata": {},
                        "Malda": {},
                        "Murshidabad": {},
                        "Nadia": {},
                        "North 24 Parganas": {},
                        "Paschim Bardhaman": {},
                        "Paschim Medinipur": {},
                        "Purba Bardhaman": {},
                        "Purba Medinipur": {},
                        "Purulia": {},
                        "South 24 Parganas": {},
                        "Uttar Dinajpur": {}
                    }
                }
            },

            "Sri Lanka": {
                "Western": {
                    "cities": {
                        "Colombo": {},
                        "Gampaha": {},
                        "Kalutara": {}
                    }
                },
                "Central": {
                    "cities": {
                        "Kandy": {},
                        "Matale": {},
                        "Nuwara Eliya": {}
                    }
                },
                "Southern": {
                    "cities": {
                        "Galle": {},
                        "Matara": {},
                        "Hambantota": {}
                    }
                },
                "Northern": {
                    "cities": {
                        "Jaffna": {},
                        "Kilinochchi": {},
                        "Mannar": {},
                        "Vavuniya": {},
                        "Mullaitivu": {}
                    }
                },
                "Eastern": {
                    "cities": {
                        "Trincomalee": {},
                        "Batticaloa": {},
                        "Ampara": {}
                    }
                },
                "North Western": {
                    "cities": {
                        "Kurunegala": {},
                        "Puttalam": {}
                    }
                },
                "North Central": {
                    "cities": {
                        "Anuradhapura": {},
                        "Polonnaruwa": {}
                    }
                },
                "Uva": {
                    "cities": {
                        "Badulla": {},
                        "Monaragala": {}
                    }
                },
                "Sabaragamuwa": {
                    "cities": {
                        "Ratnapura": {},
                        "Kegalle": {}
                    }
                }
            },

            "Philippines": {
                "Ilocos Region": {
                    "cities": {
                        "Ilocos Norte": {},
                        "Ilocos Sur": {},
                        "La Union": {},
                        "Pangasinan": {}
                    }
                },
                "Cagayan Valley": {
                    "cities": {
                        "Batanes": {},
                        "Cagayan": {},
                        "Isabela": {},
                        "Nueva Vizcaya": {},
                        "Quirino": {}
                    }
                },
                "Central Luzon": {
                    "cities": {
                        "Aurora": {},
                        "Bataan": {},
                        "Bulacan": {},
                        "Nueva Ecija": {},
                        "Pampanga": {},
                        "Tarlac": {},
                        "Zambales": {}
                    }
                },
                "CALABARZON": {
                    "cities": {
                        "Cavite": {},
                        "Laguna": {},
                        "Batangas": {},
                        "Rizal": {},
                        "Quezon": {}
                    }
                },
                "MIMAROPA": {
                    "cities": {
                        "Marinduque": {},
                        "Occidental Mindoro": {},
                        "Oriental Mindoro": {},
                        "Palawan": {},
                        "Romblon": {}
                    }
                },
                "Bicol Region": {
                    "cities": {
                        "Albay": {},
                        "Camarines Norte": {},
                        "Camarines Sur": {},
                        "Catanduanes": {},
                        "Masbate": {},
                        "Sorsogon": {}
                    }
                },
                "Western Visayas": {
                    "cities": {
                        "Aklan": {},
                        "Antique": {},
                        "Capiz": {},
                        "Guimaras": {},
                        "Iloilo": {},
                        "Negros Occidental": {}
                    }
                },
                "Central Visayas": {
                    "cities": {
                        "Bohol": {},
                        "Cebu": {},
                        "Negros Oriental": {},
                        "Siquijor": {}
                    }
                },
                "Eastern Visayas": {
                    "cities": {
                        "Biliran": {},
                        "Eastern Samar": {},
                        "Leyte": {},
                        "Northern Samar": {},
                        "Samar": {},
                        "Southern Leyte": {}
                    }
                },
                "Zamboanga Peninsula": {
                    "cities": {
                        "Zamboanga del Norte": {},
                        "Zamboanga del Sur": {},
                        "Zamboanga Sibugay": {}
                    }
                },
                "Northern Mindanao": {
                    "cities": {
                        "Bukidnon": {},
                        "Camiguin": {},
                        "Lanao del Norte": {},
                        "Misamis Occidental": {},
                        "Misamis Oriental": {}
                    }
                },
                "Davao Region": {
                    "cities": {
                        "Davao de Oro": {},
                        "Davao del Norte": {},
                        "Davao del Sur": {},
                        "Davao Occidental": {},
                        "Davao Oriental": {}
                    }
                },
                "SOCCSKSARGEN": {
                    "cities": {
                        "Cotabato": {},
                        "Sarangani": {},
                        "South Cotabato": {},
                        "Sultan Kudarat": {}
                    }
                },
                "Caraga": {
                    "cities": {
                        "Agusan del Norte": {},
                        "Agusan del Sur": {},
                        "Dinagat Islands": {},
                        "Surigao del Norte": {},
                        "Surigao del Sur": {}
                    }
                },
                "BARMM": {
                    "cities": {
                        "Basilan": {},
                        "Lanao del Sur": {},
                        "Maguindanao del Norte": {},
                        "Maguindanao del Sur": {},
                        "Sulu": {},
                        "Tawi-Tawi": {}
                    }
                },
                "Cordillera Administrative Region": {
                    "cities": {
                        "Abra": {},
                        "Apayao": {},
                        "Benguet": {},
                        "Ifugao": {},
                        "Kalinga": {},
                        "Mountain Province": {}
                    }
                },
                "National Capital Region": {
                    "cities": {
                        "Caloocan": {},
                        "Las Piñas": {},
                        "Makati": {},
                        "Malabon": {},
                        "Mandaluyong": {},
                        "Manila": {},
                        "Marikina": {},
                        "Muntinlupa": {},
                        "Navotas": {},
                        "Parañaque": {},
                        "Pasay": {},
                        "Pasig": {},
                        "Pateros": {},
                        "Quezon City": {},
                        "San Juan": {},
                        "Taguig": {},
                        "Valenzuela": {}
                    }
                }
            },

            "Bangladesh": {
                "Barisal": {
                    "cities": {
                        "Barguna": {},
                        "Barisal": {},
                        "Bhola": {},
                        "Jhalokathi": {},
                        "Patuakhali": {},
                        "Pirojpur": {}
                    }
                },
                "Chittagong": {
                    "cities": {
                        "Bandarban": {},
                        "Brahmanbaria": {},
                        "Chandpur": {},
                        "Chittagong": {},
                        "Cox's Bazar": {},
                        "Cumilla": {},
                        "Feni": {},
                        "Khagrachhari": {},
                        "Lakshmipur": {},
                        "Noakhali": {},
                        "Rangamati": {}
                    }
                },
                "Dhaka": {
                    "cities": {
                        "Dhaka": {},
                        "Faridpur": {},
                        "Gazipur": {},
                        "Gopalganj": {},
                        "Kishoreganj": {},
                        "Madaripur": {},
                        "Manikganj": {},
                        "Munshiganj": {},
                        "Narayanganj": {},
                        "Narsingdi": {},
                        "Rajbari": {},
                        "Shariatpur": {},
                        "Tangail": {}
                    }
                },
                "Khulna": {
                    "cities": {
                        "Bagerhat": {},
                        "Chuadanga": {},
                        "Jashore": {},
                        "Jhenaidah": {},
                        "Khulna": {},
                        "Kushtia": {},
                        "Magura": {},
                        "Meherpur": {},
                        "Narail": {},
                        "Satkhira": {}
                    }
                },
                "Mymensingh": {
                    "cities": {
                        "Jamalpur": {},
                        "Mymensingh": {},
                        "Netrokona": {},
                        "Sherpur": {}
                    }
                },
                "Rajshahi": {
                    "cities": {
                        "Bogura": {},
                        "Joypurhat": {},
                        "Naogaon": {},
                        "Natore": {},
                        "Chapainawabganj": {},
                        "Pabna": {},
                        "Rajshahi": {},
                        "Sirajganj": {}
                    }
                },
                "Rangpur": {
                    "cities": {
                        "Dinajpur": {},
                        "Gaibandha": {},
                        "Kurigram": {},
                        "Lalmonirhat": {},
                        "Nilphamari": {},
                        "Panchagarh": {},
                        "Rangpur": {},
                        "Thakurgaon": {}
                    }
                },
                "Sylhet": {
                    "cities": {
                        "Habiganj": {},
                        "Moulvibazar": {},
                        "Sunamganj": {},
                        "Sylhet": {}
                    }
                }
            }
        };


        nationalitySelect.addEventListener('change', NationalityUpdate);

        function NationalityUpdate() {
            const selectedNationality = $('#nationality').val();
            updateStates(selectedNationality);
        }

        NationalityUpdate();
        stateProvinceSelect.addEventListener('change', updateProvince);

        function updateProvince() {
            const selectedState = $('#stateProvince').val();
            const selectedNationality = nationalitySelect.value;
            updateCities(selectedNationality, selectedState);
        }

        updateProvince();

        cityDistrictSelect.addEventListener('change', function() {
            const selectedCity = this.value;
            const selectedNationality = nationalitySelect.value;
            const selectedState = stateProvinceSelect.value;
            updatePoliceStationsAndPostCodes(selectedNationality, selectedState, selectedCity);
        });



        function updateStates(nationality) {
            stateProvinceSelect.innerHTML = '<option value="">Select State/Province</option>';
            cityDistrictSelect.innerHTML = '<option value="">Select City/District</option>';
            policeStationSelect.innerHTML = '<option value="">Select Police Station</option>';
            postCodeSelect.innerHTML = '<option value="">Select Post Code</option>';

            if (nationality && data[nationality]) {
                const states = Object.keys(data[nationality]);
                states.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state;
                    option.textContent = state;
                    if (hasOldState && oldState == state) {
                        option.selected = true;
                    }
                    stateProvinceSelect.appendChild(option);
                });
            }
        }

        function updateCities(nationality, state) {
            cityDistrictSelect.innerHTML = '<option value="">Select City/District</option>';
            policeStationSelect.innerHTML = '<option value="">Select Police Station</option>';
            postCodeSelect.innerHTML = '<option value="">Select Post Code</option>';

            if (nationality && state && data[nationality] && data[nationality][state] && data[nationality][
                    state
                ].cities) {
                const cities = Object.keys(data[nationality][state].cities);
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    if (hasOldCity && oldCity == city) {
                        option.selected = true;
                    }
                    cityDistrictSelect.appendChild(option);
                });
            }
        }

        function updatePoliceStationsAndPostCodes(nationality, state, city) {
            policeStationSelect.innerHTML = '<option value="">Select Police Station</option>';
            postCodeSelect.innerHTML = '<option value="">Select Post Code</option>';

            if (nationality && state && city && data[nationality] && data[nationality][state] && data[
                    nationality][state].cities[city]) {
                const policeStations = data[nationality][state].cities[city].policeStations;
                const postCodes = data[nationality][state].cities[city].postCodes;

                policeStations.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.textContent = station;
                    policeStationSelect.appendChild(option);
                });

                postCodes.forEach(code => {
                    const option = document.createElement('option');
                    option.value = code;
                    option.textContent = code;
                    postCodeSelect.appendChild(option);
                });
            }
        }
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    const loader = `<span class="spinner" role="status" style="text-align: center" aria-hidden="true"></span>`;
    const btn = `<span class="btn-text">Save & Continue</span>`;
    const fieldset1 = $('#fieldset1');
    const fieldset2 = $('#fieldset2');
    const fieldset3 = $('#fieldset3');
    const firstStep = $('#firstStep');
    const secondStep = $('#secondStep');
    const thirdStep = $('#thirdStep');

    $('#f1Button').on('click', function(e) {
        e.preventDefault();

        const button = $(this);
        const formData = new FormData();

        formData.append('firstname', $('input[name=firstname]').val());
        formData.append('lastname', $('input[name=lastname]').val());
        formData.append('mother_name', $('input[name=mother_name]').val());
        formData.append('date_of_birth_day', $('#date_of_birth_day').val());
        formData.append('date_of_birth_month', $('#date_of_birth_month').val());
        formData.append('date_of_birth_year', $('#date_of_birth_year').val());
        formData.append('email', $('input[name=email]').val());
        formData.append('nationality', $('#nationality').val());
        formData.append('job_position', $('#job_position').val());
        formData.append('contact_numberr', $('input[name=contact_number]').val());
        formData.append('whatsapp_numberr', $('input[name=whatsapp_number]').val());

        // Handle file upload if a file is selected
        const fileInput = $('#fileInput')[0];
        if (fileInput.files.length > 0) {
            formData.append('applicant_photo', fileInput.files[0]);
        }

        $('.error-message').remove();

        $.ajax({
            url: "{{ route('rider.submitStep1') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                button.prop('disabled', true);
                button.html(loader);
            },
            success: function(response) {
                button.prop('disabled', false);
                button.html(btn);
                if (response.status == true) {
                    fieldset1.hide();
                    fieldset2.show();

                    firstStep.find('span').removeClass('bg-[#e0b228]');
                    firstStep.find('span').addClass('bg-White-c');
                    firstStep.find('a').removeClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    secondStep.find('span').addClass('bg-[#e0b228]');
                    secondStep.find('span').removeClass('bg-White-c');
                    secondStep.find('a').addClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
                }

                if (response.status == 'redirect') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr, status, error) {
                button.prop('disabled', false);
                button.html(btn);

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('applicant_photo')) {
                        $('#photoError').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.applicant_photo}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('contact_numberr')) {
                        $('#phone-error').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.contact_numberr}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('whatsapp_numberr')) {
                        $('#whatsappnumberflag-error').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.whatsapp_numberr}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('date_of_birth_day') || errors.hasOwnProperty(
                            'date_of_birth_month') || errors.hasOwnProperty('date_of_birth_year')) {
                        $('#dexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please select correct date</p>`
                        );
                    }
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const input = $(`[name=${key}]`);
                            const errorMessage = errors[key][0];
                            input.after(
                                `<span class="error-message" style="font-size: 13px !important; color: red;">${errorMessage}</span>`
                            );
                        }
                    }
                }
            }
        });
    });

    $('#f2Button').on('click', function(e) {
        e.preventDefault();

        const button2 = $(this);
        const formData2 = new FormData();

        formData2.append('passportno', $('input[name=passportno]').val());
        formData2.append('passport_doe_day', $('#passport_doe_day').val());
        formData2.append('passport_doe_month', $('#passport_doe_month').val());
        formData2.append('passport_doe_year', $('#passport_doe_year').val());
        formData2.append('father_name', $('input[name=father_name]').val());
        formData2.append('nidorcnicnumber', $('input[name=nidorcnicnumber]').val());
        formData2.append('martialstatus', $('#martialstatus').val());
        formData2.append('uaeresident', $('#uaeresident').val());
        formData2.append('religion', $('#religion').val());
        formData2.append('emiratesid', $('input[name=emiratesid]').val());
        formData2.append('emirates_expiry_day', $('#emirates_expiry_day').val());
        formData2.append('emirates_expiry_month', $('#emirates_expiry_month').val());
        formData2.append('emirates_expiry_year', $('#emirates_expiry_year').val());
        formData2.append('homeaddrss', $('input[name=homeaddrss]').val());
        formData2.append('province', $('#stateProvince').val());
        formData2.append('city', $('#cityDistrict').val());
        formData2.append('policeStation', $('input[name=policeStation]').val());
        formData2.append('zip', $('input[name=zip]').val());
        formData2.append('reference', $('input[name=reference]').val());
        // Handle file upload if a file is selected
        const fileInput1 = $('#fileInputPassport')[0];
        if (fileInput1.files.length > 0) {
            formData2.append('applicant_passport', fileInput1.files[0]);
        }
        const fileInput2 = $('#fileInputSignature')[0];
        if (fileInput2.files.length > 0) {
            formData2.append('specialpage', fileInput2.files[0]);
        }
        const fileInput3 = $('#fileInputNID')[0];
        if (fileInput3.files.length > 0) {
            formData2.append('nid_cnic_front', fileInput3.files[0]);
        }
        const fileInput4 = $('#fileInputNIDBack')[0];
        if (fileInput4.files.length > 0) {
            formData2.append('nid_cnic_back', fileInput4.files[0]);
        }

        $('.error-message').remove();

        $.ajax({
            url: "{{ route('rider.submitStep2') }}",
            type: 'POST',
            data: formData2,
            contentType: false,
            processData: false,
            beforeSend: function() {
                button2.prop('disabled', true);
                button2.html(loader);
            },
            success: function(response) {
                button2.prop('disabled', false);
                button2.html(btn);
                if (response.status == true) {
                    fieldset2.hide();
                    fieldset3.show();
                    secondStep.find('span').removeClass('bg-[#e0b228]');
                    secondStep.find('span').addClass('bg-White-c');
                    secondStep.find('a').removeClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    thirdStep.find('span').addClass('bg-[#e0b228]');
                    thirdStep.find('span').removeClass('bg-White-c');
                    thirdStep.find('a').addClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
                }
                if (response.status == 'redirect') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr, status, error) {
                button2.prop('disabled', false);
                button2.html(btn);

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('passport_doe_year') || errors.hasOwnProperty(
                            'passport_doe_month') || errors.hasOwnProperty('passport_doe_day')) {
                        $('#pexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please choose correct date</p>`
                        );
                    }
                    if (errors.hasOwnProperty('emirates_expiry_day') || errors.hasOwnProperty(
                            'emirates_expiry_month') || errors.hasOwnProperty(
                            'emirates_expiry_year')) {
                        $('#eexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please choose correct date</p>`
                        );
                    }
                    if (errors.hasOwnProperty('applicant_passport')) {
                        $('#applicant_passport').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.applicant_passport}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('specialpage')) {
                        $('#specialpage').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.specialpage}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('nid_cnic_front')) {
                        $('#nid_cnic_front').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.nid_cnic_front}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('nid_cnic_back')) {
                        $('#nid_cnic_back').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.nid_cnic_back}</p>`
                        );
                    }

                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const input = $(`[name=${key}]`);
                            const errorMessage = errors[key][0];
                            input.after(
                                `<span class="error-message" style="font-size: 13px !important; color: red;">${errorMessage}</span>`
                            );
                        }
                    }
                }
            }
        });
    });

    $('#f3Button').on('click', function(e) {
        e.preventDefault();

        const button3 = $(this);
        const formData3 = new FormData();

        formData3.append('appli_dri_number', $('#appli_dri_number').val());
        formData3.append('drving_lic_expiry_day', $('#drving_lic_expiry_day').val());
        formData3.append('drving_lic_expiry_month', $('#drving_lic_expiry_month').val());
        formData3.append('drving_lic_expiry_year', $('#drving_lic_expiry_year').val());
        formData3.append('have_uae_licence', $('#have_uae_licence').val());
        formData3.append('UAE_Resident_Visa_No', $('#UAE_Resident_Visa_No').val());
        formData3.append('UAE_License_No', $('#UAE_License_No').val());
        formData3.append('SIM_No', $('#SIM_No').val());

        // Handle file upload if a file is selected
        const lfileInput1 = $('#fileInputLicenseFront')[0];
        if (lfileInput1.files.length > 0) {
            formData3.append('appli_dri_lisence_frontpart', lfileInput1.files[0]);
        }
        const lfileInput2 = $('#fileInputLicenseBack')[0];
        if (lfileInput2.files.length > 0) {
            formData3.append('appli_dri_lisence_backpart', lfileInput2.files[0]);
        }
        const lfileInput3 = $('#fileInputUAEDLFront')[0];
        if (lfileInput3.files.length > 0) {
            formData3.append('UAE_DL_Front', lfileInput3.files[0]);
        }
        const lfileInput4 = $('#fileInputUAEDLBack')[0];
        if (lfileInput4.files.length > 0) {
            formData3.append('UAE_DL_Back', lfileInput4.files[0]);
        }

        $('.error-message').remove();

        $.ajax({
            url: "{{ route('rider.submitStep3') }}",
            type: 'POST',
            data: formData3,
            contentType: false,
            processData: false,
            beforeSend: function() {
                button3.prop('disabled', true);
                button3.html(loader);
            },
            success: function(response) {
                button3.prop('disabled', false);
                button3.html(btn);
                if (response.status == true) {
                    fieldset2.hide();
                    fieldset3.show();
                    secondStep.find('span').removeClass('bg-[#e0b228]');
                    secondStep.find('span').addClass('bg-White-c');
                    secondStep.find('a').removeClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    thirdStep.find('span').addClass('bg-[#e0b228]');
                    thirdStep.find('span').removeClass('bg-White-c');
                    thirdStep.find('a').addClass(
                        'p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

                    window.location.href = response.redirect;
                }
                if (response.status == 'redirect') {
                    window.location.href = response.redirect;
                }
            },
            error: function(xhr, status, error) {
                button3.prop('disabled', false);
                button3.html(btn);

                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    if (errors.hasOwnProperty('drving_lic_expiry_year') || errors.hasOwnProperty(
                            'drving_lic_expiry_day') || errors.hasOwnProperty(
                            'drving_lic_expiry_month')) {
                        $('#ddexpiryTime').html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">Please choose correct date</p>`
                        );
                    }
                    if (errors.hasOwnProperty('appli_dri_lisence_frontpart')) {
                        $('#frontImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.appli_dri_lisence_frontpart}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('appli_dri_lisence_backpart')) {
                        $('#backImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.appli_dri_lisence_backpart}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('UAE_DL_Front')) {
                        $('#UAEfrontImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.UAE_DL_Front}</p>`
                        );
                    }
                    if (errors.hasOwnProperty('UAE_DL_Back')) {
                        $('#UAEbackImag').show().html(
                            `<p class="error-message" style="font-size: 14px !important; color: red;">${errors.UAE_DL_Back}</p>`
                        );
                    }
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const input = $(`[name=${key}]`);
                            const errorMessage = errors[key][0];
                            input.after(
                                `<span class="error-message" style="font-size: 13px !important; color: red;">${errorMessage}</span>`
                            );
                        }
                    }
                }
            }
        });
    });
</script>

<!-- Previous page toggle functionality -->
<script>
    const previous2 = $('#previous2');
    const previous3 = $('#previous3');

    previous2.on('click', function() {
        fieldset1.show();
        fieldset2.hide();
        firstStep.find('span').addClass('bg-[#e0b228]');
        firstStep.find('span').removeClass('bg-White-c');
        firstStep.find('a').addClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

        secondStep.find('span').removeClass('bg-[#e0b228]');
        secondStep.find('span').addClass('bg-White-c');
        secondStep.find('a').removeClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
    });

    previous3.on('click', function() {
        fieldset2.show();
        fieldset3.hide();

        secondStep.find('span').addClass('bg-[#e0b228]');
        secondStep.find('span').removeClass('bg-White-c');
        secondStep.find('a').addClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');

        thirdStep.find('span').removeClass('bg-[#e0b228]');
        thirdStep.find('span').addClass('bg-White-c');
        thirdStep.find('a').removeClass('p-1 Laptop:py-1.5 Laptop:px-4  bg-[#e0b228] text-White-c rounded-md');
    });
</script>

<script>
    document.getElementById('have_uae_licence_id').addEventListener('change', function() {
        var uaeLicenceNoArea = document.getElementById('uae_licence_no_area');
        var uaeLicenseNoInput = document.getElementById('UAE_License_No');
        if (this.value === 'Yes') {
            uaeLicenceNoArea.style.display = 'block';
            uaeLicenseNoInput.setAttribute('required', 'required');
        } else {
            uaeLicenceNoArea.style.display = 'none';
            uaeLicenseNoInput.removeAttribute('required');
        }
    });

    // Trigger change event to set initial state based on the selected option
    document.getElementById('have_uae_licence_id').dispatchEvent(new Event('change'));
</script>

<script>
    let mainRapper = document.querySelector('.ar-main-wrapper');
    let agree = document.querySelector('#agree');
    let close = document.querySelector('.close');

    agree.onclick = () => {
        mainRapper.classList.toggle('active');
        close.classList.remove('active');
    }
    close.onclick = () => {
        mainRapper.classList.remove('active')
    }
</script>


{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Language selection functionality
        document.getElementById('language-select').addEventListener('change', function() {
            const selectedLanguage = this.value;
            if (selectedLanguage === 'english') {
                document.getElementById('english-section').style.display = 'block';
                document.getElementById('arabic-section').style.display = 'none';
            } else if (selectedLanguage === 'arabic') {
                document.getElementById('english-section').style.display = 'none';
                document.getElementById('arabic-section').style.display = 'block';
            }
        });

        // Show agreement button functionality
        document.getElementById('show-agreement-btn').addEventListener('click', function() {
            document.querySelector('.ar-main-wrapper').classList.add('active');
        });

        // Close button functionality
        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.ar-main-wrapper').classList.remove('active');
        });
    });
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Language selection functionality
        document.getElementById('language-select').addEventListener('change', function() {
            const selectedLanguage = this.value;
            if (selectedLanguage === 'english') {
                document.getElementById('english-section').style.display = 'block';
                document.getElementById('arabic-section').style.display = 'none';
            } else if (selectedLanguage === 'arabic') {
                document.getElementById('english-section').style.display = 'none';
                document.getElementById('arabic-section').style.display = 'block';
            }
        });

        // Show agreement checkbox functionality
        const showAgreementCheckbox = document.getElementById('show-agreement-btn');
        const saveConfirmButton = document.getElementById('f3Button');

        // Disable the Save & Confirm button initially
        saveConfirmButton.disabled = true;

        // Enable/disable the Save & Confirm button based on checkbox state
        showAgreementCheckbox.addEventListener('change', function() {
            saveConfirmButton.disabled = !this.checked;
        });

        // Show agreement button functionality
        showAgreementCheckbox.addEventListener('click', function() {
            if (this.checked) {
                document.querySelector('.ar-main-wrapper').classList.add('active');
            }
        });

        // Close button functionality
        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.ar-main-wrapper').classList.remove('active');
            // Leave the checkbox unchecked to ensure the user reviews the agreement again
            showAgreementCheckbox.checked = true;
            saveConfirmButton.disabled = false;
        });
    });
</script>

</html>
