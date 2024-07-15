<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\JobPosition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEnd\ApplicantController;
use App\Models\Applicant;
use Illuminate\Support\Facades\Http;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('layouts.frontend.indexupdate');
    }

    public function rider()
    {
        // session()->flush();
        function generateRandomLetters($length)
        {
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            return substr(str_shuffle($letters), 0, $length);
        }

        $letters = generateRandomLetters(3);
        $numbers = mt_rand(1000000, 9999999);

        $submissionID = $letters . $numbers;
        session()->put('submissionID', $submissionID);
        $currentStep = 1;
        if (session()->has('step1')) {
            $currentStep = 2;
        }
        if (session()->has('step2')) {
            $currentStep = 3;
        }
        if (session()->has('step3')) {
            $currentStep = 4;
            if(session()->has('verifyInfo')){
               $vInfo = session()->get('verifyInfo');
               if($vInfo['status'] == false){
                    return redirect($vInfo['url']);
               }else{
                    return redirect()->route('verified.email')->with('verifymessage', 'Your email has been successfully verified. Welcome to Conqueror Services, Dubai. You will get a call from our recruitment team within 7-14 days for an interview in your home country.');
               }
               
            }
        }
        
        $pageDescription = 'Conqueror Services LLC Hiring Bike Riders. Age Limit: 21 - 39, Nom Education Required, Any Nationality Can Apply. Salary AED 2300. Total Processing Time 1 Month.';
        $allpositions = JobPosition::all();
        return view('layouts.frontend.riderform', compact('allpositions','submissionID', 'pageDescription', 'currentStep'));
    }

    public function PrivacyPolicy()
    {
        return view('layouts.frontend.privacy-policy');
    }

    public function TermsandConditions()
    {
        return view('layouts.frontend.terms-and-conditions');
    }


    public function publicRelation()
    {
        return view('layouts.frontend.public-relation');
    }

    public function facilitiesResources()
    {
        return view('layouts.frontend.facilities-resources');
    }

    public function strategyAdvisory()
    {
        return view('layouts.frontend.strategy-advisory');
    }

    public function projectDevelopment()
    {
        return view('layouts.frontend.project-development');
    }

    public function companyFormationUAE()
    {
        return view('layouts.frontend.accounting-tax advisory.company-formation.uae');
    }

    public function companyFormationhongkong()
    {
        return view('layouts.frontend.accounting-tax advisory.company-formation.hongkong');
    }

    public function  companyFormationUSA()
    {
        return view('layouts.frontend.accounting-tax advisory.company-formation.usa');
    }

    public function  companyFormationUK()
    {
        return view('layouts.frontend.accounting-tax advisory.company-formation.uk');
    }

    public function  companyFormationBangladesh()
    {
        return view('layouts.frontend.accounting-tax advisory.company-formation.bangladesh');
    }

    public function  BankAccountOpeningUAE()
    {
        return view('layouts.frontend.bank-account-opening.uae');
    }

    public function  BankAccountOpeninghongkong()
    {
        return view('layouts.frontend.bank-account-opening.hongkong');
    }

    public function  BankAccountOpeningSingapore()
    {
        return view('layouts.frontend.bank-account-opening.singapore');
    }

    public function  BankAccountOpeningBelize()
    {
        return view('layouts.frontend.bank-account-opening.belize');
    }

    public function  BankAccountOpeningSwitzerland()
    {
        return view('layouts.frontend.bank-account-opening.switzerland');
    }

    public function  BankAccountOpeningMauritius()
    {
        return view('layouts.frontend.bank-account-opening.mauritius');
    }

    public function  BankAccountOpeningSeychelles()
    {
        return view('layouts.frontend.bank-account-opening.seychelles');
    }

    public function BankAccountOpeningLuxembourg()
    {
        return view('layouts.frontend.bank-account-opening.luxembourg');
    }

    public function PersonalTax()
    {
        return view('layouts.frontend.personaltax');
    }

    public function CorporateTax()
    {
        return view('layouts.frontend.corporate-tax');
    }


    public function OffshoreCompanySeychelles()
    {
        return view('layouts.frontend.offshore-company.seychelles');
    }

    public function OffshoreCompanyBelize()
    {
        return view('layouts.frontend.offshore-company.belize');
    }

    public function OffshoreCompanyLuxemburg()
    {
        return view('layouts.frontend.offshore-company.luxemburg');
    }

    public function ForeignInvestment()
    {
        return view('layouts.frontend.foreign-investment');
    }

    public function VisitVisaUae()
    {
        return view('layouts.frontend.visit-visa.uae');
    }

    public function VisitVisaHongKong()
    {
        return view('layouts.frontend.visit-visa.hong-kong');
    }

    public function VisitVisaHongUsa()
    {
        return view('layouts.frontend.visit-visa.usa');
    }

    public function VisitVisaHongTurkey()
    {
        return view('layouts.frontend.visit-visa.turkey');
    }

    public function VisitVisaHongUk()
    {
        return view('layouts.frontend.visit-visa.uk');
    }


    public function WorkPermit()
    {
        return view('layouts.frontend.work-permit');
    }


    public function ImmigrantVisaUk()
    {
        return view('layouts.frontend.immigrant-visa.uk');
    }
    public function ImmigrantVisaUsa()
    {
        return view('layouts.frontend.immigrant-visa.usa');
    }
    public function ImmigrantVisaHongKong()
    {
        return view('layouts.frontend.immigrant-visa.hong-kong');
    }


    public function FamilyVisa()
    {
        return view('layouts.frontend.family-visa');
    }


    public function CarRent()
    {
        return view('layouts.frontend.rental-service.car-rent');
    }
    public function RoomRent()
    {
        return view('layouts.frontend.rental-service.room-rent');
    }
    public function HotelRent()
    {
        return view('layouts.frontend.rental-service.hotel-rent');
    }


    public function BuyerConsolidation()
    {
        return view('layouts.frontend.rmg-shipment.buyer-consolidation');
    }

    public function KittingandCoPacking()
    {
        return view('layouts.frontend.rmg-shipment.kitting-and-co-packing');
    }

    public function ScanPack()
    {
        return view('layouts.frontend.rmg-shipment.scan-pack');
    }

    public function DomesticTransport()
    {
        return view('layouts.frontend.rmg-shipment.domestic-transport');
    }

    public function RMGotherServices()
    {
        return view('layouts.frontend.rmg-shipment.other-services');
    }
    

    public function career()
    {
        return view('layouts.carrierout');
    }

    public function applyJob()
    {
        return view('layouts.frontend.job');
    }

    public function applyforOthers()
    {

        $allpositions = JobPosition::all();

        return view('layouts.frontend.apply', compact('allpositions'));


        //    // Manipulate the data array for each select element
        //    $serializedPositions = [];

        //    // Example: Select element 1
        //    $desiredItem1 = $allpositions->where('id', 42)->first();
        //    $allpositions1 = $allpositions->reject(function ($item) use ($desiredItem1) {
        //        return $item->id === $desiredItem1->id;
        //    });
        //    $allpositions1->prepend($desiredItem1);
        //    $serializedPositions[42] = $allpositions1;

        //    // Example: Select element 2
        //    $desiredItem2 = $allpositions->where('id', 43)->first();
        //    $allpositions2 = $allpositions->reject(function ($item) use ($desiredItem2) {
        //        return $item->id === $desiredItem2->id;
        //    });
        //    $allpositions2->prepend($desiredItem2);
        //    $serializedPositions[43] = $allpositions2;

    }

    public function applyforRiders()
    {
        function ip_visitor_country()
        {
            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = $_SERVER['REMOTE_ADDR'];
            $country = "Unknown";

            if (filter_var($client, FILTER_VALIDATE_IP)) {
                $ip = $client;
            } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                $ip = $forward;
            } else {
                $ip = $remote;
            }

            $response = Http::get("http://www.geoplugin.net/json.gp?ip=" . $ip);

            $ip_data = $response->json();
            $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

            if ($ip_data && $ip_data['geoplugin_countryName'] != null) {
                $country = $ip_data['geoplugin_countryName'];
            }

            return $country;
        }

        $getcountry = ip_visitor_country();

        $pageDescription = 'Conqueror Services LLC Hiring Bike Riders. Age Limit: 21 - 39, Nom Education Required, Any Nationality Can Apply. Salary AED 2300. Total Processing Time 1 Month.';

        $allpositions = JobPosition::all();

        return view('layouts.frontend.applyrider', compact('allpositions', 'pageDescription', 'getcountry'));
    }

    //Blog List Page
    public function blog()
    {

        return view('layouts.frontend.blog');
    }

    public function blogDetails($post_slug)
    {
        // Retrieve the post by its slug
        $post = Post::where('slug', $post_slug)->first();

        $latestPost = Post::where('id', '!=', $post->id) // Exclude the current post
            ->orderBy('created_at', 'desc') // Order by creation date descending
            ->take(3) // Limit the number of posts to display
            ->get();

        if (!$post) {
            // If the post does not exist, redirect to the blog page
            return redirect()->route('blog');
        }

        return view('layouts.frontend.posts.view', compact('post', 'latestPost'));
    } //End method

    //Blog Display Based on Category

    public function viewCategoryPost($slug)
    {

        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return redirect('/blog')->with('status', 'Category not found');
        }

        $posts = $category->posts;
        return view('layouts.frontend.posts.index', compact('category', 'posts'));
    }

    //Blog Details 
    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', 'active')->first();

        if ($category) {
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', 'active')->first();
            if ($post) {
                $latestPosts = Post::where('category_id', $category->id)->where('status', 'active')->orderBy('created_at', 'DESC')->limit(3)->get();
                return view('layouts.frontend.posts.view', compact('category', 'post', 'latestPosts'));
            }
        }

        abort(404); // Category or post not found
    }

    // Check gmail existing for apply rider
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $user = Applicant::where('email', $email)->first();

        if ($user) {
            return response()->json(['exists' => true]);
        }

        return response()->json(['exists' => false]);
    }
}
