<?php

/**
 * Sources:
 * 		http://en.wikipedia.org/wiki/Provinces_of_Ireland
 *
 * @package Countries
 */
class Country_Ireland extends CountryPlugin {
	protected $countryName = "Ireland";
	protected $countrySlug = "ireland";
	protected $regionNames = "Irish provinces";
	protected $continent = "europe";

	protected $extendedData = array(
	);

	protected $countryData = array(
		array(
			"regionName" => "Leinster",
			"regionShort" => "",
			"regionSlug" => "leinster",
			"weight" => 25,
			"cities" => array(
				"Dublin"
			)
		),
		array(
			"regionName" => "Ulster",
			"regionShort" => "",
			"regionSlug" => "ulster",
			"weight" => 21,
			"cities" => array(
				"Belfast"
			)
		),
		array(
			"regionName" => "Munster",
			"regionShort" => "",
			"regionSlug" => "munster",
			"weight" => 12,
			"cities" => array(
				"Cork"
			)
		),
		array(
			"regionName" => "Connacht",
			"regionShort" => "",
			"regionSlug" => "connacht",
			"weight" => 25,
			"cities" => array(
				"Galway"
			)
		)
	);

	public function install() {
		return CountryPluginHelper::populateDB($this->countryName, $this->countrySlug, $this->countryData);
	}
}