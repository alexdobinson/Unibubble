<?php

use services\marketplace\MarketplaceListings as Listings;

use services\validators\ListingsValidator;

class MarketplaceController extends BaseController {
    
	protected $page = array(
		'title' => 'Unibubble Marketplace',
        'description' => 'Welcome to the unibubble marketplace'
	);

    protected $params = array(
        'looking_for' => 0,
        'global_category' => 'buysell',
        'category' => null,
        'sub_category' => null,
        'page' => 0,
        'per_page' => 16
    );

    public function getListings($param1=null, $param2=null, $param3=null)
    {
        // populate the params array for returning the listings by extrapalating the data from the params given
        // validation happens in marketplace listings service

        if($param1 == 'looking-for')
        {
            $this->params['looking_for'] = true;

            if(isset($param2) && in_array($param2, Config::get('custom.listing_types'))) 
            {
                $this->params['global_category'] = $param2;

                if(isset($param3)) $this->params['category'] = $param3;
            }

            else if(isset($param2))
            {
                $this->params['category'] = $param2;

                if(isset($param3)) $this->params['sub_category'] = $param3;
            }

        }

        
        else if(isset($param1))
        {
            if(in_array($param1, Config::get('custom.listing_types')))
            {
                $this->params['global_category'] = $param1;

                if(isset($param2)) $this->params['category'] = $param2;

                if(isset($param3)) $this->params['sub_category'] = $param3;
            }
            else
            {
                $this->params['category'] = $param1;

                if(isset($param2)) $this->params['sub_category'] = $param2;
            }
        }

        if(Input::get('page')) $this->page['page'] = Input::get('page');
        
        if(Input::get('per_page')) $this->page['per_page'] = Input::get('per_page');

        $listings = Listings::getListings($this->params);

        dd($listings);
        return View::make('marketplace/listings')->with('page', (object)$this->page)->with('listings', $listings);

    }
}