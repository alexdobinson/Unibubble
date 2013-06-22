<?php namespace services\marketplace;

use services\validators\ListingsValidator as Validator;

class MarketplaceListings
{
	public static function getListings($params)
	{
		$validator = new Validator($params);

		if($validator->passes())
		{

			// TODO, link category with global category

			// TODO: implement pagination


			if(isset($params['category']))
			{
				// check that the category exists before continuing
				if(\Category::name($params['category'])->exists())
				{
					if(isset($params['sub_category']) && \Category::name($params['sub_category'])->exists())
					{
						$category_id = \Category::name($params['sub_category'])->first()->category_id;
					}
					else
					{
						$category_id = \Category::name($params['category'])->first()->category_id;
					}

					switch($params['global_category'])
					{
						case 'buysell': $listings = \Product::wherecategory_id($category_id)->wanted($params['looking_for'])->get(); break;
						case 'housing': $listings = \House::wherecategory_id($category_id)->wanted($params['looking_for'])->get(); break;
						case 'jobs': $listings = \Job::wherecategory_id($category_id)->wanted($params['looking_for'])->get(); break;
					}
					
					return $listings;
				}
			}

			else
			{
				$listings = \Product::wanted($params['looking_for'])->get();
				return $listings;
			}

		}
		else
		{
			$listings = \Product::wanted(0)->get();
			return $listings;
		}
		
	}
}