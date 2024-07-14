@extends('layouts.app')

@section('styles')
    <style>
        /* -----   */

        .terms-and-conditions .content-container h2 {
            margin-top: 25px;
            font-size: 22px;
        }

        .terms-and-conditions .content-container p {
            margin-bottom: 10px;
            text-align: justify;
        }

        .terms-and-conditions .content-container li {
            list-style: disc;
            font-size: 16px;
            color: #656871;
            margin-bottom: 7px;
            line-height: 1.6;
        }

        @media(max-width:450px) {

            .terms-and-conditions .content-container h2 {
                font-size: 18px;
            }

            .terms-and-conditions .content-container li {
                font-size: 14px;
            }

            .terms-and-conditions .content-container p {
                font-size: 14px;
            }


        }
    </style>
@endsection

@section('content')
    <!-- -----------------------------  -->
    <section class="terms-and-conditions">
        <div class="content-container">

            <h1>Please Read These Terms Of Service Carefully. </h1>
            <p style="font-weight: 500;">These Terms Of Service Constitute An Agreement (This “Agreement”) By And Between
                Conqueror Services LLC , Whose Principal Place Of Business Is City Pharmacy Building, M02, Port Saeed,
                Dubai, U.A.E (“Conqueror”) And The Corporation, Llc, Partnership, Sole Proprietorship, Or Any Other Business
                Entity Executing This Agreement Or Any Order (“Customer”). This Agreement Is Effective As Of The Date
                Customer Starts Using The System (The “Effective Date”). Customer’s Use Of And Conqueror’s Provision Of
                Conqueror’s System And Conqueror Software (As Defined Below) Are Governed By This Agreement.
            </p>
            <p>Each Party Acknowledges That It Has Read This Agreement, Understands It, And Agrees To Be Bound By Its Terms,
                And That The Person Signing On Its Behalf Has Been Authorized To Do So. The Person Executing This Agreement
                On Customer’s Behalf Represents That He Or She Has The Authority To Bind Customer To These Terms And
                Conditions.
            </p>

            <h2>1. DEFINITIONS</h2>
            <p> i) “AUP” means Conqueror’s acceptable use policy as specified in Section 5 (i) of this Agreement.
            </p>
            <p>ii) “Cloud Hosting” means the provision of products and services by a third party, in a hosted, virtualized
                environment, accessible via the internet, utilized by Conqueror to provide Customer access to the System.
            </p>
            <p>iii) “Custom Component(s)” means the customization made to the Conqueror Software, either subject to payment
                of one-time Customization Fees by the Customer or offered as part of a subscription to the System, without
                payment of any additional charge.
            </p>
            <p>iv) “Customer Data” means data in electronic form input or collected through the System by or from Customer,
                including without limitation by Customer’s Users but does not include Content.
            </p>
            <p>v) “Customization Fees” shall mean the one-time customization fees, for creating of Custom Component, paid by
                the Customer to Conqueror and as more particularly specified under the Order.
            </p>
            <p>vi) “Documentation” means the written materials relating to the operation and use of Conqueror Software, user
                manuals, user guides, technical manuals, release notes, and online help files regarding use of Conqueror
                Software provided as part of the System, and any other materials prepared in connection with any Conqueror
                Software modification, correction, or enhancement, and shall include any updated versions of Documentation
                as may be provided by Conqueror from time to time.
            </p>
            <p>vii) “Electronic Communications” shall mean any transfer of signs, signals, text, images, sounds, data or
                intelligence of any nature transmitted in whole or part electronically to or from the System.
            </p>
            <p>viii) “Order” means an order or SOW for subscription to the System, executed between the Customer and
                Conqueror or a Reseller of Conqueror.
            </p>
            <p>ix) “Reseller” shall mean an authorised reseller of the System.
            </p>
            <p>x) “Subscription Fees” means the fees payable by the Customer to Conqueror or the applicable Reseller, as the
                case may be, for a subscription to the System, as further described under the Order.
            </p>
            <p>xi) “System” means  Conqueror Software and Custom Component , along with support and maintenance services
                thereto,  provided by Conqueror, by way of Cloud Hosting and subscribed by the Customer, upon payment of
                Subscription Fees.
            </p>
            <p>xii) “SLA” means Conqueror’s service level agreement, if specified in the Order.
            </p>
            <p>xiii) “User” means any individual who is authorized to use the System and has been supplied user
                identifications and passwords by Customer or on Customer’s behalf.
            </p>

            <h2>2. THE SYSTEM </h2>

            <p>i) <b>Use of the System.</b> During the Term, Customer may access and use the System pursuant to the terms of
                any outstanding Order.
            </p>
            <p>ii) <b>Service Levels.</b> The System shall function in accordance with the SLA, if provided in the Order.
            </p>
            <p>iii) <b>System Extensions or Updates.</b> Customer agrees that, unless explicitly stated otherwise, any new
                features that augment or enhance the System, and or any new service subsequently purchased by Customer
                pursuant to an amendment accepted by Conqueror referencing this Agreement will be subject to this Agreement.
            </p>

            <h2>3. TERM, SUBSCRIPTION FEE, PAYMENT </h2>
            <p>i) <b>Term.</b> The term of this Agreement (the “Term”) will commence on the Effective Date and continue for
                the period set forth in the Order.
            </p>
            <p>ii) <b>Subscription Fees.</b> The Customer shall pay, the Subscription Fees and applicable Customization Fees
                (hereinafter, collectively referred to as the “Fees”) set forth in each Order for each Term as per the
                payment terms mentioned in the Order, for the use of the System.
            </p>

            <h2>4. LICENSE, RESTRICTIONS
            </h2>
            <p>i) <b> License.</b> Subject to the terms and conditions of this Agreement, Conqueror grants to Customer,
                during the Term, a non-transferable, non-exclusive, non-sublicensable license (“License”) to and permit
                Users to (i) use the System thereof as well as any Custom Component, (ii) display and print Customer Data,
                and (iii) use the Documentation solely in connection with the System, for Customer’s own internal business
                operations.
            </p>
            <p>ii) <b>Restrictions.</b> Customer acknowledges and agrees that the License is granted subject to the
                following:
            </p>
            <p>a) Customer shall not license, sub-license, sell, rent, lease, transfer, assign, distribute, display, host,
                outsource, disclose or otherwise commercially exploit or make the System or the Documentation available to
                any third party (except as otherwise authorized) and not create Internet “links” to the System or “frame” or
                “mirror” any part of the System, including any content contained in the System, on any other server or
                device;
            </p>
            <p>b) Customer shall not modify, make derivative works of, disassemble, reverse compile, or reverse engineer any
                part of the System, including without limitation, the Conqueror Software or Custom Components and or
                Documentation that are provided as a part thereof, or access the System or Documentation in order to build a
                similar or competitive product or service; and
            </p>
            <p>c) This Agreement is not a sale and does not convey any rights of ownership in or related to the System, any
                base component or Custom Component, or Documentation to Customer.
            </p>

            <h2>5. CUSTOMER’S RESPONSIBILITIES</h2>
            <p>i) <b>Acceptable Use Policy (“AUP”)</b>. The Customer shall comply with the AUP. Customer shall not:
            </p>
            <p>a) use the System for time-sharing purposes or in any other way allow third parties to exploit the System;
            </p>
            <p>b) share System passwords or other log-in information;
            </p>
            <p>c) share nonpublic System features or content with any third party;
            </p>
            <p>d) access the System in order to build a competitive product or service, to build a product using similar
                ideas, features, functions or graphics of the System, or to copy any ideas, features, functions or graphics
                of the System; or
            </p>
            <p>e) engage in web scraping or data scraping on or related to the System, including without limitation
                collection of information through any software that simulates human activity or any bot or web crawler.
            </p>
            <p>ii) <b>Unauthorized Access.</b> The Customer shall take reasonable steps to prevent unauthorized access to
                the System, including without limitation by protecting its passwords and other log-in information. Customer
                acknowledges and agrees that Customer is prohibited from sharing passwords and or user names with
                unauthorized users. Customers will be responsible for the confidentiality and use of Customer’s (including
                its Users’) passwords and usernames. Customers will also be responsible for all Electronic Communications,
                including those containing Customer Data, and all other data of any kind contained within emails or
                otherwise entered electronically through the System or under Customer’s administrative account. Customer
                agrees to notify Conqueror if Customer becomes aware of any loss or theft or unauthorized use of any of
                Customer’s passwords, user names, and/or account number. In the event that it suspects any breach of the
                requirements of this Section 5 (ii), including without limitation by Users, Conqueror may suspend Customer’s
                access to the System without prior notice, in addition to such other remedies at law or equity, as Conqueror
                may have.
            </p>
            <p>iii) <b>Compliance with Laws.</b> In its use of the System, Customer shall comply with all applicable laws,
                including, without limitation, those related to data privacy, international communications, and the
                exportation of technical or personal data and other laws applicable to the protection of Customer Data.
            </p>
            <p>iv) <b>Users & System Access.</b> Customer will ensure that the use of the System by Users is in accordance
                with the terms of this Agreement
            </p>
            <p>v) <b>Transmission of Data.</b> Customer acknowledges and understands that Customer’s Electronic
                Communications will involve transmission over the internet, including by Cloud Hosting and over various
                networks, only part of which may be owned and/or operated by Conqueror.
            </p>


            <h2>6. CUSTOMER DATA & PRIVACY
            </h2>
            <p>i) <b>Use of Customer Data.</b> Conqueror shall access any Customer Data, in terms with its Privacy Policy,
                hosted at <a
                    href="https://www.Conquerorservices.com/privacy-policy-services">https://www.Conquerorservices.com/privacy-policy-services</a>
            </p>
            <p>ii) <b> Privacy Policy.</b> The Privacy Policy applies only to the System and does not apply to any third
                party website or service linked to the System, including any Cloud Hosting or any other website or service
                recommended or referred to through the System or by Conqueror’s staff, which shall be solely governed by the
                terms of the privacy policy of such third party.
            </p>
            <p>iii) <b>Content.</b> Conqueror does not acquire any right, title and/or interest in the content material
                (including but not limited to text, Customer-provided software, scripts, trademarks, logos, HTML coding,
                domain names, links, graphics, audio, video, and any data) that Customer makes available for use by Users by
                means of the System (collectively “Content”). Customers are solely responsible for all Content . Customer
                authorizes Conqueror to publish Content to provide services under this Agreement. Conqueror shall not,
                intentionally (i) access Content or (ii) disclose  Content to any third party, except to the extent as
                necessary for Conqueror to provide, or obtain third-party supplier (e.g. Google Cloud Platform) support for
                the Systems or to provide information requested by Customer subject that no personal information would be
                shared by Conqueror.
            </p>
            <p>iv) <b>Cloud Hosting Terms.</b> Conqueror uses Google Cloud Platform to provide Cloud Hosting services and to
                that extent the services are subject to the Google Cloud Hosting terms and conditions provided at <a
                    href="https://cloud.google.com/terms">https://cloud.google.com/terms</a>  In case of any unauthorized
                exposure or disclosure of Customer Data due to errors or actions of third parties or Cloud Hosting,
                Conqueror will provide commercially reasonable cooperation and assistance to Customer for seeking relevant
                remedies against such third parties or Cloud Hosting.
            </p>
            <p>v) <b>Data Accuracy.</b> Conqueror will have no responsibility or liability for the accuracy of Content or
                Customer Data uploaded to the System by Customer, and Users provided by the Customer to Conqueror.
            </p>
            <p>vi) <b>Aggregate & Anonymized Data.</b> Notwithstanding anything contained herein above Conqueror may use
                Customer Data on an aggregated or de-identified basis and any data pertaining to location tracking, for
                research, analysis, profiling, and similar purposes in its sole discretion, including for the development of
                the System.
            </p>

            <h2>7. PROPRIETARY RIGHTS
            </h2>
            <p>i) IP Rights to the System. Conqueror retains all right, title, and interest in and to the Systems and Custom
                Component, including without limitation all software used to provide the Systems and Custom Component and
                all graphics, user interfaces, logos, and trademarks reproduced through the Systems. The Customer recognizes
                that the System and Custom Component are protected by copyright and other laws, and except where expressly
                provided otherwise by Conqueror, nothing in the System, the Custom Component, the Documentation, or the
                Agreement shall be construed to confer any license or rights to any of Conqueror’s intellectual property
                rights, whether by estoppel, implication, or otherwise.
            </p>
            <p>ii) Customer acknowledges and agrees that Conqueror shall own all right, title and interest in and to all
                intellectual property rights in the System and the Documentation and any suggestions, enhancement requests,
                feedback, or recommendations provided by Customer or its Users relating to the System or the Documentation
                (“Feedback”), including all unpatented inventions, patent applications, patents, design rights, copyrights,
                trademarks, service marks, trade names, know-how and other trade secret rights, and all other intellectual
                property rights, derivatives or improvements thereof.
            </p>
            <p>iii) Customer acknowledges and agrees that it does not acquire any rights in the System or Documentation,
                express or implied, other than those expressly granted in this Agreement and all rights not expressly
                granted to Customer are reserved by Conqueror.
            </p>
            <p>iv) Customer shall own all rights, title and interest in and to all intellectual property rights in the
                Content. Where necessary, for the purposes of providing subscription to the System or creation of Custom
                Component, as the case may be, Customer grants Conqueror a license to use such Content.
            </p>

            <h2>8. SUSPENSION, TERMINATION
            </h2>
            <p>i) Suspension for Delinquent Account. Conqueror reserves the right to suspend Customer’s access and/or use of
                the System for any Customer account for which any payment of Subscription Fees or Customization Cost is due
                but remains unpaid after fifteen (15) day’s written notice of such delinquency. Customer agrees that
                Conqueror shall not be liable to Customer, or to any third party, for any suspension of the System resulting
                from Customer’s non-payment of the Fees as described in Section 3.
            </p>
            <p>ii) Termination by the Parties.  Either Party may terminate this Agreement, without cause, by giving the
                other Party, thirty (30) days’ advance written notice of such termination;
            </p>
            <p>iii) Termination by either Party for Cause. Either Party may terminate this Agreement, for the other Party’s
                material breach by: (a) giving the other Party thirty (30) days’ written notice, specifying in detail the
                nature of the breach,  if the breach is capable of being cured; or (b)  effective immediately if the breach
                is not capable of being  cured.
            </p>
            <p>iv) Effects of Termination. </p>
            <p>a) Upon termination of this Agreement, the Customer shall cease use of the System and delete, destroy, or
                return all copies of the Documentation in its possession or control.
            </p>
            <p>b) The Parties agree that in the event the Agreement is terminated by the Customer under Section 8 (ii) or by
                Conqueror under Section 8 (iii), the Customer shall be liable to pay the entire Fees under the Agreement.
            </p>
            <p>c) In the event the Agreement is terminated by Conqueror under Section 8 (ii) or by the Customer under
                Section 8 (iii), the Customer shall be liable to pay the Fees, until the effective date of termination of
                the Agreement.
            </p>

            <h2>9. CONFIDENTIAL INFORMATION
            </h2>
            <p>i) Confidential Information. Each Party may have access to information that is confidential to the other
                Party (“Confidential Information”). For purposes of this Agreement, Confidential Information shall include
                any information that is clearly identified in writing at the time of disclosure as confidential as well as
                any information that, based on the circumstances under which it was disclosed, a reasonable person would
                believe it to be confidential. Customer’s Confidential Information shall include Customer Data, Content. A
                Party’s Confidential Information shall not include information that (i) is or becomes a part of the public
                domain through no act or omission of the other Party; (ii) was in the other Party’s lawful possession prior
                to the disclosure without any obligation of confidentiality and had not been obtained by the other Party
                either directly or indirectly from the disclosing Party; (iii) is lawfully disclosed to the other Party by a
                third party without restriction on disclosure; (iv) is independently developed by the other Party without
                use of or reference to the other Party’s Confidential Information, as established by written records.
            </p>

            <p>ii) Nondisclosure. The parties agree to use commercially reasonable efforts not to make each other’s
                Confidential Information available in any form to any third party. Notwithstanding the foregoing, Customer
                acknowledges and agrees that Conqueror may disclose Customer’s Confidential Information to its third-party
                service providers solely to the extent necessary to provide the System. This Section 9 will not be construed
                to prohibit disclosure of Confidential Information to the extent that such disclosure is required by law or
                valid order of a court or other governmental authority; provided, however, that a Party who has been
                subpoenaed or otherwise compelled by a valid law or court order to disclose Confidential Information (the
                “Responding Party”) shall first have given sufficient and prompt written notice to the other Party of the
                receipt of any subpoena or other request for such disclosure, so as to permit such Party an opportunity to
                obtain a protective order or take other appropriate action. The Responding Party will cooperate in the other
                Party’s efforts to obtain a protective order or other reasonable assurance that confidential treatment will
                be afforded the Confidential Information. If the Responding Party is compelled as a matter of law to
                disclose the Confidential Information, it may disclose to the Party compelling the disclosure only that part
                of the Confidential Information as is required by law to be disclosed.
            </p>
            <p>iii) Retention of Rights. This Agreement does not transfer ownership of Confidential Information or grant a
                license thereto. Conqueror will retain all right, title, and interest in and to all Confidential Information
                which is owned by Conqueror.
            </p>

            <h2>10. REPRESENTATIONS & WARRANTIES
            </h2>
            <p>Customer represents and warrants that: (a) it has the full right and authority to enter into, execute, and
                perform its obligations under this Agreement and that no pending or threatened claim or litigation known to
                it would have a material adverse impact on its ability to perform as required by this Agreement; (b) it has
                accurately identified itself and it has not provided any inaccurate information about itself to or through
                the System; and (c) it is either a corporation or the sole proprietorship of an individual of 18 years or
                older, or another entity authorized to do business pursuant to applicable law; and (iv) the Customer holds
                all rights, title and interest, including intellectual property rights, in and to the Content  and any use
                or incorporation by Conqueror of such Content shall not infringe the rights of any third parties.
            </p>

            <h2>11. WARRANTY DISCLAIMERS
            </h2>
            <p>EXCEPT AS OTHERWISE PROVIDED EXPRESSLY UNDER THIS AGREEMENT, CUSTOMER ACCEPTS THE SYSTEM AND CUSTOM COMPONENT
                “AS IS” AND AS AVAILABLE, WITHOUT, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE,
                OR NON INFRINGEMENT OF INTELLECTUAL PROPERTY RIGHTS. WITHOUT LIMITING THE GENERALITY OF THE FOREGOING: (i)
                CONQUEROR DOES NOT REPRESENT OR WARRANT THAT: (i) THE SYSTEM OR CUSTOM COMPONENT WILL PERFORM WITHOUT
                INTERRUPTION OR ERROR; (ii) THE SYSTEM OR CUSTOM COMPONENT IS SECURE FROM HACKING OR OTHER UNAUTHORIZED
                INTRUSION OR THAT CUSTOMER DATA WILL REMAIN PRIVATE OR SECURE; (iii) THE CLOUD HOSTING THAT MAKES THE SYSTEM
                AVAILABLE WILL BE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR NON-INFRINGING OR WILL FUNCTION IN
                ACCORDANCE WITH ANY SLAs OR UPTIMES OF CONQUEROR, SET OUT UNDER THE ORDER.
            </p>

            <h2>12. INDEMNIFICATION
            </h2>
            <p>i) Each Party shall defend, indemnify, and hold harmless, the other Party, its officers, directors and
                employees, (collectively, the “Indemnified Parties”), from and against any direct claim, suit, or
                proceeding, by a third party, arising out of:
            </p>
            <p>a) unauthorized disclosure or exposure of personally identifiable information or other private information,
                including Customer Data, by  the Party;
            </p>
            <p>b) gross negligence or wilful misconduct of the Party, resulting in bodily injury (including death) and
                damage to tangible property;
            </p>
            <p>ii) Conqueror shall defend, indemnify, and hold harmless, the Customer, its officers, directors and
                employees, from and against any direct claim, suit, or proceeding, by a third party, arising out of
                infringement or misappropriation or violation of any patent, copyright, trade secret, or other intellectual
                property right by the System, or Custom Component provided that, Conqueror shall not be liable for any such
                claim of infringement of intellectual property right where the claim of infringement arises out of: (a)
                revisions to the System made without Conqueror’s written consent; (b) Customer’s failure to incorporate
                updates or upgrades that would have avoided the alleged infringement; (c) Conqueror’s design or modification
                to the System is in compliance with specifications, or arises out of any Content, provided by Customer; or
                (d) use of the System in combination with hardware or software not provided by Conqueror.
            </p>
            <p>iii) In addition to the foregoing, the Customer shall defend, indemnify, and hold harmless, Conqueror, its
                officers, directors and employees, from and against any claim, suit, or proceeding, arising out of (i)
                breach of applicable laws; (ii) breach of any third party intellectual property rights; (iii) any gross
                negligence or willful misconduct of the Customer or its Users that would violate the AUP or the requirements
                of this Agreement applicable to Customer; and (iv) any use of the System through Customer’s account, whether
                authorized or unauthorized:
            </p>
            <p>iv) The Party being indemnified (“Indemnified Party”) shall: (a) give the party indemnifying the Indemnified
                Party (“Indemnifying Party”) prompt written notice of the relevant claim; (b) provide the Indemnifying
                Party, at the Indemnifying Party’s expense, with reasonable information, assistance and cooperation in the
                defense of such claim; and (c) give the Indemnifying Party the right to control the defense and settlement
                of any such claim, except that the Indemnifying Party will not enter into any settlement that affects the
                Indemnified Party’s rights or interest without the indemnified Party’s prior written approval, which shall
                not be unreasonably withheld or delayed, and provided further that the Indemnified Party shall not be
                required to allow the Indemnifying Party to assume the control of the defense of a Claim to the extent that
                the Indemnified Party determines (i) any relief other than monetary damages is sought against Indemnifying
                Party.
            </p>

            <h2>13. LIMITATION OF LIABILITY
            </h2>
            <p>i) In No Event Shall The Aggregate Liability Of Conqueror Arising Out Of Or In Connection With This
                Agreement, Including Any License, Use, Or Other Employment Of The System, Whether Such Liability Arises From
                Any Claim Based On Breach Or Repudiation Of Contract, Breach Of Warranty, Tort, Or Otherwise, Exceed The
                Total Subscription Fees Actually Paid By Customer In The Three (3) Months Period Immediately Preceding The
                Event Giving Rise To Such Claim. There Shall Be Only One Aggregate Liability Cap Under This Agreement Even
                If There Are Multiple Claims; Each Claim Shall Reduce The Amount Available In The Aggregate Liability Cap.
            </p>
            <p>Ii) Excluded Damages. Neither Party Shall Be Liable To The Other Party For Exemplary, Punitive, Special,
                Incidental, Indirect Or Consequential Damages Including Without Limitation, Interruption Of Business, Lost
                Profits, Lost Or Corrupted Data Or Content, Lost Revenue Arising Out Of This Agreement (Including Without
                Limitation The Service, The Use Of The Service Or The Inability To Use Service), Even If The Party Has Been
                Advised Of The Possibility Of Such Damages.
            </p>

            <h2>14. MISCELLANEOUS
            </h2>
            <p>i) Independent Contractors. The Parties are independent contractors and shall so represent themselves in all
                regards. Neither party is the agent of the other, and neither may make commitments on the other’s behalf.
            </p>
            <p>ii) Notices. Any notice required or permitted under the terms of this Agreement or required by law must be in
                writing and must be (i) delivered in person, (ii) sent by registered or certified mail return receipt
                requested, (iii) sent by overnight courier, or (iv) by email whose receipt is acknowledged by an officer of
                the receiving Party. Notices shall be considered to have been given at the time of actual delivery in
                person, five business days after posting if by mail, one business day if by overnight courier service, or
                upon receipt of machine confirmation of successful delivery by email as described herein. Any notice
                required to be sent to the Parties shall be addressed to the addresses mentioned in the Order.
            </p>
            <p>iii) Force Majeure. No delay, failure, or default, other than a failure to pay fees when due, will constitute
                a breach of this Agreement to the extent caused by hurricanes, earthquakes, epidemics, acts of God or of
                nature, strikes or other labor disputes, riots or other acts of civil disorder, acts of war, terrorism, acts
                of governments, changes in laws or other causes beyond the performing party’s reasonable control. The
                affected party shall provide prompt notice if a Force Majeure event causes it to be unable to perform any
                obligation. Performance shall be promptly resumed after the Force Majeure event has been remedied;
                otherwise, this Agreement may be terminated in accordance with provisions set forth herein.
            </p>
            <p>iv) Assignment & Successors. The Customer may not assign this Agreement or any of its rights or obligations
                hereunder without Conqueror’s express written consent. Except to the extent forbidden in this Section 14
                (iv), this Agreement will be binding upon and inure to the benefit of the parties’ respective successors and
                assigns.
            </p>
            <p>v) Severability. To the extent permitted by applicable law, the parties hereby waive any provision of law
                that would render any Section of this Agreement invalid or otherwise unenforceable in any respect. In the
                event that a provision of this Agreement is held to be invalid or otherwise unenforceable, such provision
                will be interpreted to fulfill its intended purpose to the maximum extent permitted by applicable law, and
                the remaining provisions of this Agreement will continue in full force and effect.
            </p>
            <p>vi) No Waiver. Neither party will be deemed to have waived any of its rights under this Agreement by lapse of
                time or by any statement or representation other than by an authorized representative in an explicit written
                waiver. No waiver of a breach of this Agreement will constitute a waiver of any other breach of this
                Agreement.
            </p>
            <p>vii) Publicity. On signing this Agreement, the Customer agrees to; (i) be included in the list of customers
                on Conqueror’s digital and physical media including website, social media posts, brochures by using
                Customer’s name, logo etc. (ii) allow a mutually agreed press release, and (iii) participate in a case-study
                or participate in public and speaking engagements in webinars and industry events at Customer’s discretion
                upon request provided, any publicity or marketing material to be used in the press release or the speaking
                engagements must be pre- approved by the Customer.
            </p>
            <p>viii) Survival. The following provisions will survive termination or expiration of this Agreement Sections 7
                (Proprietary Rights), 9 (Confidential Information), 11 (Warranty Disclaimers), 12 (Indemnification), and 13
                (Limitation of Liability); and (c) any other provision of this Agreement that must survive to fulfill its
                essential purpose.
            </p>
            <p>ix) Choice of Law. This Agreement, and all disputes and claims arising under this Agreement, will be
                interpreted and governed by the laws of USA, without regard to its conflict of laws principles, and the
                parties hereby consent to venue and to the exclusive jurisdiction of the courts at  Princeton, New Jersey.
            </p>
            <p>x) Dispute Resolution. Any dispute arising out of or relating to this Agreement shall be referred to
                arbitration of a sole arbitrator, to be appointed by Conqueror. In the event that Conqueror fails to appoint
                an arbitrator through the mechanism stated herein above, then the Parties agree that the dispute shall be
                referred to and finally resolved by arbitration in accordance with the Arbitration Rules of (the “Rules”) of
                the International Chamber of Commerce (“ICC”) by three (3) arbitrators designated by the Parties. Each party
                shall designate one arbitrator. The third arbitrator shall be designated by the two arbitrators designated
                by the Parties. If either Party fails to designate an arbitrator within thirty (30) days after the filing of
                the Dispute with the ICC, such arbitrator shall be appointed in the manner prescribed by the Rules. An
                arbitration proceeding hereunder shall be conducted in Princeton, New Jersey, and shall be conducted in the
                English language. The decision or award of the arbitrators shall be in writing and is final and binding on
                both Parties .
            </p>
            <p>xi) Conflicts. In the event of any conflict between this Agreement and any Conqueror policy posted online,
                including without limitation the AUP or Privacy Policy, the terms of this Agreement will govern. In the
                event of any conflict between this Agreement and any Order, the terms of the Order to the extent of the
                conflict shall govern.
            </p>
            <p>xii) Technology Export. The Customer shall not: (a) permit any third party to access or use the System in
                violation of any applicable U.S. law or regulation; or (b) export any software provided by Conqueror or
                otherwise remove it from the United States except in compliance with all applicable U.S. laws and
                regulations. Without limiting the generality of the foregoing, the Customer shall not permit any third party
                to access or use the System in, or export such software to, a country subject to a United States embargo.
            </p>
            <p>xiii) Entire Agreement. This Agreement sets forth the entire agreement of the parties and supersedes all
                prior or contemporaneous writings, negotiations, and discussions with respect to its subject matter. Neither
                party has relied upon any such prior or contemporaneous communications.
            </p>
            <p>xiv) Amendment. This Agreement may not be amended except through a written agreement by authorized
                representatives of each party.
            </p>

            <h5 style="margin-top: 20px;">Accepted and Agreed
            </h5>

        </div>
    </section>
    <!-- -----------------------------  -->
@endsection
