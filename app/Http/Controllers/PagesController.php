<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function homePage()
    {
        $startAccountButton = 'Start your FREE account now!';
        $videos = array(
            0 => array(
                'title' => 'Form for your website',
                'id' => 'GacD0tF7GBA',
                'desc' => ''
            ),
            1 => array(
                'title' => 'How to use',
                'id' => 'sxSA-NMVCR8',
                'desc' => ''
            ),
            2 => array(
                'title' => 'Provide Online Estimates',
                'id' => '8uT2CfAfgXA',
                'desc' => ''
            )
        );
        $featuresList = [
            'Completely Customizable Bidding Parameters',
            '24 Hour Estimate Generator',
            '24 Hour Online Lead Collection',
            'Automated Onsite Bid Generator',
            'Quick Custom Proposal Generator',
            'NEVER loose leads to SPAM or JUNK mail again!',
            'Centralized Client List',
            'Secure Information Storage',
            'Mobile Friendly',
            'Rapid Online Support',
            'Easy Install',
            'Cloud Based System',
            'Professional Customizable Design',
            'Export Client List to Major Mailing Clients',
            'Easily Sortable Data',
            'Analyze ROI With Our Marketing Tracker'
        ];
        $formFields = array(
            0 => array(
                'placeholder' => 'first name',
                'id' => 'firstName',
                'required' => 'required',
                'type' => 'text'
            ),
            1 => array(
                'placeholder' => 'last name',
                'id' => 'lastName',
                'required' => '',
                'type' => 'text'
            ),
            2 => array(
                'placeholder' => 'email',
                'id' => 'email',
                'required' => 'required',
                'type' => 'email'
            ),
            3 => array(
                'placeholder' => 'confirm email',
                'id' => 'confirmEmail',
                'required' => 'required',
                'type' => 'email'
            ),
            4 => array(
                'placeholder' => 'choose username',
                'id' => 'firstName',
                'required' => 'required',
                'type' => 'text'
            ),
            5 => array(
                'placeholder' => 'choose password',
                'id' => 'firstName',
                'required' => 'required',
                'type' => 'text'
            ),
            6 => array(
                'placeholder' => 'business name',
                'id' => 'businessName',
                'required' => 'required',
                'type' => 'text'
            ),
            7 => array(
                'placeholder' => 'industry',
                'id' => 'industry',
                'required' => '',
                'type' => 'text'
            ),
            8 => array(
                'placeholder' => 'how did you learn about us?',
                'id' => 'heardAbout',
                'required' => '',
                'type' => 'text'
            )
        );

        return view('greetings.homePage', compact('navItems', 'callToAction', 'logoImage', 'introCopy', 'startAccountButton', 'videos', 'featuresList', 'formFields'));
    }
    
    public function accountLogin()
    {
        $username = ['Taco', 'Burrito', 'Mexico'];

        return view('greetings.accountLogin', compact('username'));
    }
    
    public function viewPackages()
    {
        return view('greetings.viewPackages');
    }
    
    public function contact()
    {
        return view('greetings.contact');
    }
}

