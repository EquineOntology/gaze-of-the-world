<?php

/*******************************************************************************************************
 * Based on sameer-shelavale/php-countries-array (https://github.com/sameer-shelavale/php-countries-array)
 * Author : Sameer Shelavale
 * Email : samiirds@gmail.com, sameer@techrevol.com, sameer@possible.in
 * Author website: http://techrevol.com, http://possible.in
 * License: AGPL3, You should keep Package name, Class name, Author name, Email and website credits.
 *
 * Modified by Christian Fratta
 */

namespace CFratta\GazeOfTheWorld;

class Countries {

	/*
	 * Language list
	 *
	 * Most spoken languages worldwide (according to https://en.wikipedia.org/wiki/List_of_languages_by_total_number_of_speakers)
	 * ZH => Chinese (Mandarin)
	 * ES => Spanish
	 * EN => English
	 * HI => Hindi
	 * UR => Urdu
	 * AR => Arabic
	 * ML => Malay
	 * RU => Russian
	 * FR => French
	 * PT => Portuguese
	 * BN => Bengali
	 * DE => German
	 * HA => Hausa
	 * PA => Punjabi
	 * JA => Japanese
	 * FA => Persian
	 * SW => Swahili
	 * TE => Telugu
	 * IT => Italian
	 * TR => Turkish
	 * JV => Javanese
	 * TA => Tamil
	 * KO => Korean
	 * MR => Marathi
	 * VI => Vietnamese
	 */
	public static $countries = [
		"AF" => [
			"alpha2"    => "AF",
			"name"      => [
				"ES" => "Afghanistán",
				"EN" => "Afghanistan",
				"FR" => "Afghanistan",
				"PT" => "Afeganistão",
				"DE" => "Afghanistan",
				"SW" => "Afghanistan",
				"IT" => "Afghanistan",
				"TR" => "Afganistan"
			],
			"continent" => "Asia",
		],
		"AL" => [
			"alpha2"    => "AL",
			"name"      => [
				"ES" => "Albania",
				"EN" => "Albania",
				"FR" => "Albanie",
				"PT" => "Albânia",
				"DE" => "Albanien",
				"SW" => "Albania",
				"IT" => "Albania",
				"TR" => "Arnavutluk"
			],
			"continent" => "Europe"
		],
		"DZ" => [
			"alpha2"    => "DZ",
			"name"      => [
				"ES" => "Argelia",
				"EN" => "Algeria",
				"FR" => "Algérie",
				"PT" => "Argélia",
				"DE" => "Algerien",
				"SW" => "Algeria",
				"IT" => "Algeria",
				"TR" => "Cezayir"
			],
			"continent" => "Africa"
		],
		"AD" => [
			"alpha2"    => "AD",
			"name"      => [
				"ES" => "Andorra",
				"EN" => "Andorra",
				"FR" => "Andorre",
				"PT" => "Andorra",
				"DE" => "Andorra",
				"SW" => "Andorra",
				"IT" => "Andorra",
				"TR" => "Andora"
			],
			"continent" => "Europe"
		],
		"AO" => [
			"alpha2"    => "AO",
			"name"      => [
				"ES" => "Angola",
				"EN" => "Angola",
				"FR" => "Angola",
				"PT" => "Angola",
				"DE" => "Angola",
				"SW" => "Angola",
				"IT" => "Angola",
				"TR" => "Angola"
			],
			"continent" => "Africa"
		],
		"AQ" => [
			"alpha2"    => "AQ",
			"name"      => [
				"ES" => [
					"Antártica",
					"Antártida"
				],
				"EN" => [
					"Antarctica",
					"Antarctic"
				],
				"FR" => "Antarctique",
				"PT" => [
					"Antártica",
					"Antárctico"
				],
				"DE" => "Antarktis",
				"SW" => "Bara la Antaktiki",
				"IT" => [
					"Antartide",
					"Antartico"
				],
				"TR" => [
					"Antarktika",
					"Antartik"
				]
			],
			"continent" => "Antarctica"
		],
		"AG" => [
			"alpha2"    => "AG",
			"name"      => [
				"ES" => [
					"Antigua y Barbuda",
					"Antigua",
					"Barbuda"
				],
				"EN" => [
					"Antigua and Barbuda",
					"Antigua",
					"Barbuda"
				],
				"FR" => [
					"Antigua-et-Barbuda",
					"Antigua",
					"Barbuda"
				],
				"PT" => [
					"Antígua e Barbuda",
					"Antiga e Barbuda",
					"Antígua",
					"Barbuda"
				],
				"DE" => [
					"Antigua und Barbuda",
					"Antigua",
					"Barbuda"
				],
				"SW" => [
					"Antigua na Barbuda",
					"Antigua",
					"Barbuda"
				],
				"IT" => [
					"Antigua e Barbuda",
					"Antigua",
					"Barbuda"
				],
				"TR" => [
					"Antigua ve Barbuda",
					"Antigua",
					"Barbuda"
				],
			],
			"continent" => "North America"
		],
		"AR" => [
			"alpha2"    => "AR",
			"name"      => [
				"ES" => "Argentina",
				"EN" => "Argentina",
				"FR" => "Argentine",
				"PT" => "Argentina",
				"DE" => "Argentinien",
				"SW" => "Argentina",
				"IT" => "Argentina",
				"TR" => "Arjantin"
			],
			"continent" => "South America"
		],
		"AM" => [
			"alpha2"    => "AM",
			"name"      => [
				"ES" => "Armenia",
				"EN" => "Armenia",
				"FR" => "Arménie",
				"PT" => [
					"Arménia",
					"Armênia"
				],
				"DE" => "Armenien",
				"SW" => "Armenia",
				"IT" => "Armenia",
				"TR" => "Ermenistan"
			],
			"continent" => "Asia"
		],
		"AU" => [
			"alpha2"    => "AU",
			"name"      => [
				"ES" => [
					"Australia",
					"Isla Norfolk"
				],
				"EN" => [
					"Australia",
					"Norfolk Island"
				],
				"FR" => [
					"Australie",
					"Ile Norfolk"
				],
				"PT" => [
					"Austrália",
					"Ilha Norfolk"
				],
				"DE" => [
					"Australien",
					"Norfolkinsel"
				],
				"SW" => [
					"Australia",
					"Kisiwa cha Norfolk"
				],
				"IT" => [
					"Australia",
					"Isola Norfolk"
				],
				"TR" => [
					"Avustralya",
					"Norfolk Adası"
				]
			],
			"continent" => "Oceania"
		],
		"AT" => [
			"alpha2"    => "AT",
			"name"      => [
				"ES" => "Austria",
				"EN" => "Austria",
				"FR" => "Autriche",
				"PT" => "Áustria",
				"DE" => "Österreich",
				"SW" => "Austria",
				"IT" => "Austria",
				"TR" => "Avusturya"
			],
			"continent" => "Europe"
		],
		"AZ" => [
			"alpha2"    => "AZ",
			"name"      => [
				"ES" => "Azerbaiyán",
				"EN" => "Azerbaijan",
				"FR" => "Azerbaïdjan",
				"PT" => [
					"Azerbaijão",
					"Azerbeijão"
				],
				"DE" => "Aserbaidschan",
				"SW" => "Azerbaijan",
				"IT" => "Azerbaigian",
				"TR" => "Azerbaycan"
			],
			"continent" => "Asia"
		],
		"BS" => [
			"alpha2"    => "BS",
			"name"      => [
				"ES" => "Bahamas",
				"EN" => "Bahamas",
				"FR" => "Bahamas",
				"PT" => [
					"Baamas",
					"Bahamas"
				],
				"DE" => "Bahamas",
				"SW" => "Bahama",
				"IT" => "Bahamas",
				"TR" => "Bahama"
			],
			"continent" => "North America"
		],
		"BH" => [
			"alpha2"    => "BH",
			"name"      => [
				"ES" => "Bahrein",
				"EN" => "Bahrain",
				"FR" => "Bahreïn",
				"PT" => [
					"Barein",
					"Bareine",
					"Barém"
				],
				"DE" => "Bahrain",
				"SW" => "Bahrain",
				"IT" => [
					"Bahrein",
					"Bahrain"
				],
				"TR" => "Bahreyn"
			],
			"continent" => "Asia"
		],
		"BD" => [
			"alpha2"    => "BD",
			"name"      => [
				"ES" => "Bangladesh",
				"EN" => "Bangladesh",
				"FR" => "Bangladesh",
				"PT" => [
					"Bangladesh",
					"Bangladeche"
				],
				"DE" => "Bangladesch",
				"SW" => "Bangladesh",
				"IT" => "Bangladesh",
				"TR" => "Bangladeş"
			],
			"continent" => "Asia"
		],
		"BB" => [
			"alpha2"    => "BB",
			"name"      => [
				"ES" => "Barbados",
				"EN" => "Barbados",
				"FR" => "Barbade",
				"PT" => "Barbados",
				"DE" => "Barbados",
				"SW" => "Barbados",
				"IT" => "Barbados",
				"TR" => "Barbados"
			],
			"continent" => "North America"
		],
		"BY" => [
			"alpha2"    => "BY",
			"name"      => [
				"ES" => "Bielorrusia",
				"EN" => "Belarus",
				"FR" => "Biélorussie",
				"PT" => [
					"Bielorrússia",
					"Bielo-Rússia",
					"Rússia Branca"
				],
				"DE" => [
					"Weißrussland",
					"Weißruthenien"
				],
				"SW" => "Belarus",
				"IT" => "Bielorussia",
				"TR" => [
					"Beyaz Rusya",
					"Belarus"
				]
			],
			"continent" => "Europe"
		],
		"BE" => [
			"alpha2"    => "BE",
			"name"      => [
				"ES" => "Bélgica",
				"EN" => "Belgium",
				"FR" => "Belgique",
				"PT" => "Bélgica",
				"DE" => "Belgien",
				"SW" => "Ubelgiji",
				"IT" => "Belgio",
				"TR" => "Belçika"
			],
			"continent" => "Europe"
		],
		"BZ" => [
			"alpha2"    => "BZ",
			"name"      => [
				"ES" => [
					"Belice",
					"Honduras Británica"
				],
				"EN" => [
					"Belize",
					"British Honduras"
				],
				"FR" => [
					"Belize",
					"Honduras britannique"
				],
				"PT" => [
					"Belize",
					"Honduras Britânicas"
				],
				"DE" => [
					"Belize",
					"Britisch-Honduras"
				],
				"SW" => "Belize",
				"IT" => [
					"Belize",
					"Honduras Britannico"
				],
				"TR" => [
					"Belize",
					"Britanya Hondurası"
				]
			],
			"continent" => "North America"
		],
		"BJ" => [
			"alpha2"    => "BJ",
			"name"      => [
				"ES" => "Benín",
				"EN" => "Benin",
				"FR" => "Bénin",
				"PT" => "Benim",
				"DE" => "Benin",
				"SW" => "Benin",
				"IT" => "Benin",
				"TR" => "Benin"
			],
			"continent" => "Africa"
		],
		"BT" => [
			"alpha2"    => "BT",
			"name"      => [
				"ES" => "Bután",
				"EN" => "Bhutan",
				"FR" => "Bhoutan",
				"PT" => "Butão",
				"DE" => "Bhutan",
				"SW" => "Bhutan",
				"IT" => [
					"Bhutan",
					"Butan"
				],
				"TR" => "Bhutan"
			],
			"continent" => "Asia"
		],
		"BO" => [
			"alpha2"    => "BO",
			"name"      => [
				"ES" => "Bolivia",
				"EN" => "Bolivia",
				"FR" => "Bolivie",
				"PT" => "Bolívia",
				"DE" => "Bolivien",
				"SW" => "Bolivia",
				"IT" => "Bolivia",
				"TR" => "Bolivya"
			],
			"continent" => "South America"
		],
		"BA" => [
			"alpha2"    => "BA",
			"name"      => [
				"ES" => [
					"Bosnia y Herzegovina",
					"Bosnia",
					"Herzegovina"
				],
				"EN" => [
					"Bosnia and Herzegovina",
					"Bosnia",
					"Herzegovina",
				],
				"FR" => [
					"Bosnie-Herzégovine",
					"Bosnie",
					"Herzégovine"
				],
				"PT" => [
					"Bósnia-Herzegovina",
					"Bósnia e Herzegovina",
					"Bósnia",
					"Herzegovina"
				],
				"DE" => [
					"Bosnien und Herzegowina",
					"Bosnien-Herzegowina",
					"Bosnien",
					"Herzegowina"
				],
				"SW" => [
					"Bosnia na Herzegovina",
					"Bosnia",
					"Herzegovina"
				],
				"IT" => [
					"Bosnia ed Erzegovina",
					"Bosnia",
					"Erzegovina"
				],
				"TR" => [
					"Bosna Hersek",
					"Bosna",
					"Hersek"
				]
			],
			"continent" => "Europe"
		],
		"BW" => [
			"alpha2"    => "BW",
			"name"      => [
				"ES" => "Botswana",
				"EN" => "Botswana",
				"FR" => "Botswana",
				"PT" => [
					"Botsuana",
					"Botswana"
				],
				"DE" => "Botswana",
				"SW" => "Botswana",
				"IT" => [
					"Botswana",
					"Beciuania"
				],
				"TR" => "Botsvana"
			],
			"continent" => "Africa"
		],
		"BR" => [
			"alpha2"    => "BR",
			"name"      => [
				"ES" => "Brasil",
				"EN" => "Brazil",
				"FR" => "Brésil",
				"PT" => "Brasil",
				"DE" => "Brasilien",
				"SW" => "Brazil",
				"IT" => "Brasile",
				"TR" => "Brezilya"
			],
			"continent" => "South America"
		],
		"BN" => [
			"alpha2"    => "BN",
			"name"      => [
				"ES" => "Brunei",
				"EN" => "Brunei",
				"FR" => "Brunei",
				"PT" => "Brunei",
				"DE" => "Brunei",
				"SW" => "Brunei",
				"IT" => "Brunei",
				"TR" => "Bruney",
			],
			"continent" => "Asia",
		],
		"BG" => [
			"alpha2"    => "BG",
			"name"      => [
				"ES" => "Bulgaria",
				"EN" => "Bulgaria",
				"FR" => "Bulgarie",
				"PT" => "Bulgária",
				"DE" => "Bulgarien",
				"SW" => "Bulgaria",
				"IT" => "Bulgaria",
				"TR" => "Bulgaristan"
			],
			"continent" => "Europe"
		],
		"BF" => [
			"alpha2"    => "BF",
			"name"      => [
				"ES" => "Burkina Faso",
				"EN" => "Burkina Faso",
				"FR" => "Burkina Faso",
				"PT" => [
					"Burquina Faso",
					"Burkina Faso"
				],
				"DE" => "Burkina Faso",
				"SW" => "Burkina Faso",
				"IT" => "Burkina Faso",
				"TR" => "Burkina Faso",
			],
			"continent" => "Africa"
		],
		"BI" => [
			"alpha2"    => "BI",
			"name"      => [
				"ES" => "Burundi",
				"EN" => "Burundi",
				"FR" => "Burundi",
				"PT" => [
					"Burundi",
					"Burúndi"
				],
				"DE" => "Burundi",
				"SW" => "Burundi",
				"IT" => "Burundi",
				"TR" => "Burundi"
			],
			"continent" => "Africa"
		],
		"KH" => [
			"alpha2"    => "KH",
			"name"      => [
				"ES" => "Camboya",
				"EN" => [
					"Cambodia",
					"Kampuchea"
				],
				"FR" => "Cambodge",
				"PT" => "Camboja",
				"DE" => "Kambodscha",
				"SW" => "Kamboja",
				"IT" => "Cambogia",
				"TR" => "Kamboçya"
			],
			"continent" => "Asia"
		],
		"CM" => [
			"alpha2"    => "CM",
			"name"      => [
				"ES" => "Camerún",
				"EN" => "Cameroon",
				"FR" => "Cameroun",
				"PT" => "Camarões",
				"DE" => "Kamerun",
				"SW" => "Cameroon",
				"IT" => [
					"Camerun",
					"Camerùn",
					"Càmerun"
				],
				"TR" => "Kamerun"
			],
			"continent" => "Africa"
		],
		"CA" => [
			"alpha2"    => "CA",
			"name"      => [
				"ES" => "Canadá",
				"EN" => "Canada",
				"FR" => "Canada",
				"PT" => "Canadá",
				"DE" => "Kanada",
				"SW" => "Kanada",
				"IT" => "Canada",
				"TR" => "Kanada"
			],
			"continent" => "North America"
		],
		"CV" => [
			"alpha2"    => "CV",
			"name"      => [
				"ES" => "Cabo Verde",
				"EN" => "Cape Verde",
				"FR" => "Cap-Vert",
				"PT" => "Cabo Verde",
				"DE" => "Kap Verde",
				"SW" => "Cabo Verde",
				"IT" => "Capo Verde",
				"TR" => [
					"Kabo Verde",
					"Yeşil Burun"
				]
			],
			"continent" => "Africa"
		],
		"CF" => [
			"alpha2"    => "CF",
			"name"      => [
				"ES" => "República Centroafricana",
				"EN" => "Central African Republic",
				"FR" => "République centrafricaine",
				"PT" => "República Centro-Africana",
				"DE" => "Zentralafrikanische Republik",
				"SW" => "Jamhuri ya Afrika ya Kati",
				"IT" => "Repubblica Centrafricana",
				"TR" => "Orta Afrika Cumhuriyeti"
			],
			"continent" => "Africa"
		],
		"TD" => [
			"alpha2"    => "TD",
			"name"      => [
				"ES" => "Chad",
				"EN" => "Chad",
				"FR" => "Tchad",
				"PT" => "Chade",
				"DE" => "Tschad",
				"SW" => "Chad",
				"IT" => "Ciad",
				"TR" => "Çad"
			],
			"continent" => "Africa"
		],
		"CK" => [
			"alpha2"    => "CK",
			"name"      => [
				"ES" => "Islas Cook",
				"EN" => "Cook Islands",
				"FR" => "Îles Cook",
				"PT" => "Ilhas Cook",
				"DE" => "Cookinseln",
				"SW" => "Visiwa vya Cook",
				"IT" => "Isole Cook",
				"TR" => "Cook Adaları"
			],
			"continent" => "Oceania"
		],
		"CL" => [
			"alpha2"    => "CL",
			"name"      => [
				"ES" => "Chile",
				"EN" => "Chile",
				"FR" => "Chili",
				"PT" => "Chile",
				"DE" => "Chile",
				"SW" => "Chile",
				"IT" => "Cile",
				"TR" => "Şili"
			],
			"continent" => "South America"
		],
		"CN" => [
			"alpha2"    => "CN",
			"name"      => [
				"ES" => [
					"China",
					"Hong Kong",
					"Macao"
				],
				"EN" => [
					"China",
					"Hong Kong",
					"Macau"
				],
				"FR" => [
					"Chine",
					"Hong-Kong",
					"Hongkong",
					"Macao"
				],
				"PT" => [
					"China",
					"Honguecongue",
					"Hongue Congue",
					"Macau"
				],
				"DE" => [
					"China",
					"Hongkong",
					"Hong Kong",
					"Macau",
					"Macao"
				],
				"SW" => [
					"China",
					"Hong Kong",
					"Macau"
				],
				"IT" => [
					"Cina",
					"Hongkong",
					"Macao"
				],
				"TR" => [
					"Çin",
					"Hong Kong",
					"Macau"
				]
			],
			"continent" => "Asia"
		],
		"CO" => [
			"alpha2"    => "CO",
			"name"      => [
				"ES" => "Colombia",
				"EN" => "Colombia",
				"FR" => "Colombie",
				"PT" => "Colômbia",
				"DE" => "Kolumbien",
				"SW" => "Kolombia",
				"IT" => "Colombia",
				"TR" => "Kolombiya"
			],
			"continent" => "South America"
		],
		"KM" => [
			"alpha2"    => "KM",
			"name"      => [
				"ES" => "Comoras",
				"EN" => "Comoros",
				"FR" => "Comores",
				"PT" => "Comores",
				"DE" => "Komoren",
				"SW" => "Komori",
				"IT" => "Unione delle Comore",
				"TR" => "Komor Adaları"
			],
			"continent" => "Africa"
		],
		"CG" => [
			"alpha2"    => "CG",
			"name"      => [
				"ES" => "Congo",
				"EN" => "Congo",
				"FR" => "Congo",
				"PT" => "Congo",
				"DE" => "Kongo",
				"SW" => "Kongo",
				"IT" => [
					"Congo",
					"Congo-Brazzaville",
					"Congo Francese"
				],
				"TR" => "Kongo"
			],
			"continent" => "Africa"
		],
		"CR" => [
			"alpha2"    => "CR",
			"name"      => [
				"ES" => "Costa Rica",
				"EN" => "Costa Rica",
				"FR" => "Costa Rica",
				"PT" => "Costa Rica",
				"DE" => "Costa Rica",
				"SW" => "Kosta Rika",
				"IT" => "Costa Rica",
				"TR" => "Kosta Rika"
			],
			"continent" => "North America"
		],
		"CI" => [
			"alpha2"    => "CI",
			"name"      => [
				"ES" => "Costa de Marfil",
				"EN" => "Cote D'ivoire",
				"FR" => "Côte d'Ivoire",
				"PT" => "Costa do Marfim",
				"DE" => [
					"Côte d'Ivoire",
					"Elfenbeinküste"
				],
				"SW" => "Cote d'Ivoire",
				"IT" => "Costa d'Avorio",
				"TR" => "Fildişi Kıyısı"
			],
			"continent" => "Africa"
		],
		"HR" => [
			"alpha2"    => "HR",
			"name"      => [
				"ES" => "Croacia",
				"EN" => "Croatia",
				"FR" => "Croatie",
				"PT" => "Croácia",
				"DE" => "Kroatien",
				"SW" => "Kroatia",
				"IT" => "Croazia",
				"TR" => "Hırvatistan"
			],
			"continent" => "Europe"
		],
		"CU" => [
			"alpha2"    => "CU",
			"name"      => [
				"ES" => "Cuba",
				"EN" => "Cuba",
				"FR" => "Cuba",
				"PT" => "Cuba",
				"DE" => "Kuba",
				"SW" => "Kuba",
				"IT" => "Cuba",
				"TR" => "Küba"
			],
			"continent" => "North America"
		],
		"CY" => [
			"alpha2"    => "CY",
			"name"      => [
				"ES" => "Chipre",
				"EN" => "Cyprus",
				"FR" => "Chypre",
				"PT" => "Chipre",
				"DE" => "Zypern",
				"SW" => "Kupro",
				"IT" => "Cipro",
				"TR" => "Kıbrıs"
			],
			"continent" => "Asia"
		],
		"CZ" => [
			"alpha2"    => "CZ",
			"name"      => [
				"ES" => [
					"República Checa",
					"Chequia",
					"Bohemia"
				],
				"EN" => [
					"Czech Republic",
					"Czechia",
					"Bohemia"
				],
				"FR" => [
					"République tchèque",
					"Tchéquie"
				],
				"PT" => [
					"República Checa",
					"República Tcheca",
					"Chéquia",
					"Tchéquia"
				],
				"DE" => [
					"Tschechische Republik",
					"Tschechien"
				],
				"SW" => "Ucheki",
				"IT" => [
					"Repubblica Ceca",
					"Boemia"
				],
				"TR" => [
					"Çek Cumhuriyeti",
					"Çekya",
					"Çekiye"
				]
			],
			"continent" => "Europe"
		],
		"CD" => [
			"alpha2"    => "CD",
			"name"      => [
				"ES" => [
					"RDC",
					"República del Congo",
					"República Democrática del Congo",
				],
				"EN" => [
					"DRC",
					"Republic of Congo",
					"The Democratic Republic of The Congo",
				],
				"FR" => [
					"République démocratique du Congo",
				    "RDC",
				    "Congo-Kinshasa",
				    "RD Congo"
				],
				"PT" => [
					"República Democrática do Congo",
				    "RDC",
				    "RD Congo",
				    "Congo-Kinshasa"
				],
				"DE" => [
					"Demokratische Republik Kongo",
				    "DR Kongo",
				    "Kongo-Kinshasa"
				],
				"SW" => [
					"Jamhuri ya Kidemokrasia ya Kongo",
					"Kongo-Kinshasa"
				],
				"IT" => [
					"Repubblica Democratica del Congo",
					"Congo-Kinshasa",
					"Congo-Léopoldville"
				],
				"TR" => "Demokratik Kongo Cumhuriyeti"
			],
			"continent" => "Africa"
		],
		"DK" => [
			"alpha2"    => "DK",
			"name"      => [
				"ES" => [
					"Dinamarca",
				    "Islas Feroe",
				    "Groenlandia"
				],
				"EN" => [
					"Denmark",
					"Faroe Islands",
					"Greenland"
				],
				"FR" => [
					"Danemark",
				    "Îles Féroé",
				    "Groenland"
				],
				"PT" => [
					"Dinamarca",
				    "Ilhas Féroe",
				    "Ilhas Faroé",
				    "Gronelândia"
				],
				"DE" => [
					"Dänemark",
				    "Färöer",
				    "Grönland"
				],
				"SW" => [
					"Denmark",
				    "Visiwa vya Faroe",
				    "Grinlandi"
				],
				"IT" => [
					"Danimarca",
					"Isole Faroe",
					"Groenlandia"
				],
				"TR" => [
					"Danimarka",
				    "Faroe Adaları",
				    "Grönland"
				]
			],
			"continent" => "Europe"
		],
		"DJ" => [
			"alpha2"    => "DJ",
			"name"      => [
				"ES" => "Yibuti",
				"EN" => "Djibouti",
				"FR" => "Djibouti",
				"PT" => [
					"Djibouti",
					"Djibuti",
				    "Jibuti"
				],
				"DE" => "Dschibuti",
				"SW" => "Jibuti",
				"IT" => "Gibuti",
				"TR" => "Cibuti"
			],
			"continent" => "Africa"
		],
		"DM" => [
			"alpha2"    => "DM",
			"name"      => [
				"ES" => "Dominica",
				"EN" => "Dominica",
				"FR" => "Dominique",
				"PT" => "Dominica",
				"DE" => "Dominica",
				"SW" => "Dominica",
				"IT" => "Dominica",
				"TR" => "Dominika"
			],
			"continent" => "North America"
		],
		"DO" => [
			"alpha2"    => "DO",
			"name"      => [
				"ES" => "República Dominicana",
				"EN" => "Dominican Republic",
				"FR" => "République dominicaine",
				"PT" => "República Dominicana",
				"DE" => "Dominikanische Republik",
				"SW" => "Jamhuri ya Dominika",
				"IT" => "Repubblica Dominicana",
				"TR" => "Dominik Cumhuriyeti"
			],
			"continent" => "North America"
		],
		"EC" => [
			"alpha2"    => "EC",
			"name"      => [
				"ES" => "Ecuador",
				"EN" => "Ecuador",
				"FR" => "Équateur",
				"PT" => "Equador",
				"DE" => "Ecuador",
				"SW" => "Ekuador",
				"IT" => "Ecuador",
				"TR" => "Ekvador"
			],
			"continent" => "South America"
		],
		"EG" => [
			"alpha2"    => "EG",
			"name"      => [
				"ES" => "Egipto",
				"EN" => "Egypt",
				"FR" => "Égypte",
				"PT" => [
					"Egito",
					"Egipto"
				],
				"DE" => "Ägypten",
				"SW" => "Misri",
				"IT" => "Egitto",
				"TR" => "Mısır"
			],
			"continent" => "Africa"
		],
		"SV" => [
			"alpha2"    => "SV",
			"name"      => [
				"ES" => "El Salvador",
				"EN" => "El Salvador",
				"FR" => "Salvador",
				"PT" => "El Salvador",
				"DE" => "El Salvador",
				"SW" => "El Salvador",
				"IT" => "El Salvador",
				"TR" => "El Salvador"
			],
			"continent" => "North America"
		],
		"GQ" => [
			"alpha2"    => "GQ",
			"name"      => [
				"ES" => "Guinea Ecuatorial",
				"EN" => "Equatorial Guinea",
				"FR" => "Guinée Équatoriale",
				"PT" => "Guiné Equatorial",
				"DE" => "Äquatorialguinea",
				"SW" => "Guinea ya Ikweta",
				"IT" => "Guinea Equatoriale",
				"TR" => "Ekvator Ginesi"
			],
			"continent" => "Africa"
		],
		"ER" => [
			"alpha2"    => "ER",
			"name"      => [
				"ES" => "Eritrea",
				"EN" => "Eritrea",
				"FR" => "Érythrée",
				"PT" => [
					"Eritréia",
				    "Eritreia"
				],
				"DE" => "Eritrea",
				"SW" => "Eritrea",
				"IT" => "Eritrea",
				"TR" => "Eritre"
			],
			"continent" => "Africa"
		],
		"EE" => [
			"alpha2"    => "EE",
			"name"      => [
				"ES" => "Estonia",
				"EN" => "Estonia",
				"FR" => "Estonie",
				"PT" => [
					"Estônia",
				    "Estónia"
				],
				"DE" => "Estland",
				"SW" => "Estonia",
				"IT" => "Estonia",
				"TR" => "Estonya"
			],
			"continent" => "Europe"
		],
		"ET" => [
			"alpha2"    => "ET",
			"name"      => [
				"ES" => "Etiopía",
				"EN" => "Ethiopia",
				"FR" => "Éthiopie",
				"PT" => "Etiópia",
				"DE" => "Äthiopien",
				"SW" => "Ethiopia",
				"IT" => "Etiopia",
				"TR" => "Etiyopya"
			],
			"continent" => "Africa"
		],
		"FJ" => [
			"alpha2"    => "FJ",
			"name"      => [
				"ES" => "Fiji",
				"EN" => "Fiji",
				"FR" => "Fidji",
				"PT" => [
					"Fiji",
				    "Fidji",
				    "Fidgi"
				],
				"DE" => "Fidschi",
				"SW" => "Fiji",
				"IT" => [
					"Isole Figi",
					"Figi",
					"Fiji"
				],
				"TR" => "Fiji"
			],
			"continent" => "Oceania"
		],
		"FI" => [
			"alpha2"    => "FI",
			"name"      => [
				"ES" => [
					"Finlandia",
					"Islas Åland"
				],
				"EN" => [
					"Finland",
					"Åland"
				],
				"FR" => [
					"Finlande",
					"Iles d’Åland"
				],
				"PT" => [
					"Finlândia",
					"Alanda"
				],
				"DE" => [
					"Finnland",
					"Åland-Inseln"
				],
				"SW" => [
					"Ufini",
					"Visiwa vya Aland"
				],
				"IT" => [
					"Finlandia",
					"Isole Åland"
				],
				"TR" => [
					"Finlandiya",
					"Åland"
				]
			],
			"continent" => "Europe"
		],
		"FR" => [
			"alpha2"    => "FR",
			"name"      => [
				"ES" => [
					"Francia",
					"Polinesia Francesa",
					"Nueva Caledonia",
					"Wallis y Futuna"
				],
				"EN" => [
					"France",
					"French Polynesia",
					"New Caledonia",
					"Wallis and Futuna"
				],
				"FR" => [
					"France",
					"Polynésie française",
					"Nouvelle-Calédonie",
					"Wallis-et-Futuna"
				],
				"PT" => [
					"França",
					"Polinésia Francesa",
					"Nova Caledónia",
					"Nova Caledônia",
					"Wallis e Futuna"
				],
				"DE" => [
					"Frankreich",
					"Französisch-Polynesien",
					"Neukaledonien",
					"Wallis und Futuna"
				],
				"SW" => [
					"Ufaransa",
					"Polynesia ya Kifaransa",
					"Kaledonia Mpya",
					"Wallis na Futuna"
				],
				"IT" => [
					"Francia",
					"Polinesia Francese",
					"Nuova Caledonia",
					"Wallis e Futuna"
				],
				"TR" => [
					"Fransa",
					"Fransız Polinezyası",
					"Yeni Kaledonya",
					"Wallis ve Futuna"
				],
			],
			"continent" => "Europe"
		],
		"GA" => [
			"alpha2"    => "GA",
			"name"      => [
				"ES" => "Gabón",
				"EN" => "Gabon",
				"FR" => "Gabon",
				"PT" => "Gabão",
				"DE" => "Gabun",
				"SW" => "Gabon",
				"IT" => "Gabon",
				"TR" => "Gabon"
			],
			"continent" => "Africa"
		],
		"GM" => [
			"alpha2"    => "GM",
			"name"      => [
				"ES" => "Gambia",
				"EN" => "Gambia",
				"FR" => "Gambie",
				"PT" => "Gâmbia",
				"DE" => "Gambia",
				"SW" => "Gambia",
				"IT" => "Gambia",
				"TR" => "Gambiya"
			],
			"continent" => "Africa"
		],
		"GE" => [
			"alpha2"    => "GE",
			"name"      => [
				"ES" => "Georgia",
				"EN" => [
					"Georgia",
					"Gruzia"
				],
				"FR" => "Géorgie",
				"PT" => "Geórgia",
				"DE" => "Georgien",
				"SW" => "Georgia",
				"IT" => "Georgia",
				"TR" => "Gürcistan"
			],
			"continent" => "Asia"
		],
		"DE" => [
			"alpha2"    => "DE",
			"name"      => [
				"ES" => "Alemaña",
				"EN" => "Germany",
				"FR" => "Allemagne",
				"PT" => "Alemanha",
				"DE" => "Deutschland",
				"SW" => "Ujerumani",
				"IT" => "Germania",
				"TR" => "Almanya"
			],
			"continent" => "Europe"
		],
		"GH" => [
			"alpha2"    => "GH",
			"name"      => [
				"ES" => "Ghana",
				"EN" => "Ghana",
				"FR" => "Ghana",
				"PT" => "Gana",
				"DE" => "Ghana",
				"SW" => "Ghana",
				"IT" => "Ghana",
				"TR" => "Gana"
			],
			"continent" => "Africa"
		],
		"GR" => [
			"alpha2"    => "GR",
			"name"      => [
				"ES" => "Grecia",
				"EN" => "Greece",
				"FR" => "Grèce",
				"PT" => "Grécia",
				"DE" => "Griechenland",
				"SW" => "Ugiriki",
				"IT" => "Grecia",
				"TR" => "Yunanistan"
			],
			"continent" => "Europe"
		],
		"GD" => [
			"alpha2"    => "GD",
			"name"      => [
				"ES" => "Granada",
				"EN" => "Grenada",
				"FR" => "Grenade",
				"PT" => "Granada",
				"DE" => "Grenada",
				"SW" => "Grenada",
				"IT" => "Grenada",
				"TR" => "Grenada"
			],
			"continent" => "North America"
		],
		"GT" => [
			"alpha2"    => "GT",
			"name"      => [
				"ES" => "Guatemala",
				"EN" => "Guatemala",
				"FR" => "Guatemala",
				"PT" => "Guatemala",
				"DE" => "Guatemala",
				"SW" => "Guatemala",
				"IT" => "Guatemala",
				"TR" => "Guatemala"
			],
			"continent" => "North America"
		],
		"GN" => [
			"alpha2"    => "GN",
			"name"      => [
				"ES" => "Guinea",
				"EN" => "Guinea",
				"FR" => "Guinée",
				"PT" => [
					"Guiné",
				    "Guiné-Conacri",
				    "Guiné-Conakri"
				],
				"DE" => "Guinea",
				"SW" => "Guinea",
				"IT" => "Guinea",
				"TR" => "Gine"
			],
			"continent" => "Africa"
		],
		"GW" => [
			"alpha2"    => "GW",
			"name"      => [
				"ES" => "Guinea-Bissau",
				"EN" => "Guinea-bissau",
				"FR" => "Guinée-Bissau",
				"PT" => "Guiné-Bissau",
				"DE" => "Guinea-Bissau",
				"SW" => [
					"Guinea Bisau",
					"Ginebisau"
				],
				"IT" => "Guinea-Bissau",
				"TR" => "Gine-Bissau"
			],
			"continent" => "Africa"
		],
		"GY" => [
			"alpha2"    => "GY",
			"name"      => [
				"ES" => "Guyana",
				"EN" => "Guyana",
				"FR" => "Guyana",
				"PT" => "Guiana",
				"DE" => "Guyana",
				"SW" => "Guyana",
				"IT" => "Guyana",
				"TR" => "Guyana"
			],
			"continent" => "South America"
		],
		"HT" => [
			"alpha2"    => "HT",
			"name"      => [
				"ES" => "Haití",
				"EN" => "Haiti",
				"FR" => "Haïti",
				"PT" => "Haiti",
				"DE" => "Haiti",
				"SW" => "Haiti",
				"IT" => "Haiti",
				"TR" => "Haiti"
			],
			"continent" => "North America"
		],
		"VA" => [
			"alpha2"    => "VA",
			"name"      => [
				"ES" => [
					"Ciudad del Vaticano",
				    "Santa Sede"
				],
				"EN" => [
					"Vatican City State",
					"Vatican",
					"Holy See"
				],
				"FR" => [
					"Vatican",
				    "Saint-Siège"
				],
				"PT" => [
					"Vaticano",
				    "Santa Sé"
				],
				"DE" => [
					"Staat Vatikanstadt",
					"Heiliger Stuhl"
				],
				"SW" => [
					"Vatikani",
					"Ukulu mtakatifu",
					"Ukulu wa Kitume"
				],
				"IT" => [
					"Città del Vaticano",
				    "Santa Sede"
				],
				"TR" => [
					"Vatikan",
					"Kutsal Makam"
				]
			],
			"continent" => "Europe"
		],
		"HN" => [
			"alpha2"    => "HN",
			"name"      => [
				"ES" => "Honduras",
				"EN" => "Honduras",
				"FR" => "Honduras",
				"PT" => "Honduras",
				"DE" => "Honduras",
				"SW" => "Honduras",
				"IT" => "Honduras",
				"TR" => "Honduras"
			],
			"continent" => "North America"
		],
		"HU" => [
			"alpha2"    => "HU",
			"name"      => [
				"ES" => "Hungría",
				"EN" => "Hungary",
				"FR" => "Hongrie",
				"PT" => "Hungria",
				"DE" => "Ungarn ",
				"SW" => "Hungaria",
				"IT" => "Ungheria",
				"TR" => "Macaristan"
			],
			"continent" => "Europe"
		],
		"IS" => [
			"alpha2"    => "IS",
			"name"      => [
				"ES" => "Islandia",
				"EN" => "Iceland",
				"FR" => "Islande",
				"PT" => "Islândia",
				"DE" => "Island",
				"SW" => [
					"Iceland",
					"Aisilandi",
					"Isilandi"
				],
				"IT" => "Islanda",
				"TR" => "İzlanda"
			],
			"continent" => "Europe"
		],
		"IN" => [
			"alpha2"    => "IN",
			"name"      => [
				"ES" => "India",
				"EN" => "India",
				"FR" => "Inde",
				"PT" => "Índia",
				"DE" => "Indien",
				"SW" => [
					"Uhindi",
				    "India"
				],
				"IT" => "India",
				"TR" => "Hindistan"
			],
			"continent" => "Asia"
		],
		"ID" => [
			"alpha2"    => "ID",
			"name"      => [
				"ES" => "Indonesia",
				"EN" => "Indonesia",
				"FR" => "Indonésie",
				"PT" => "Indonésia",
				"DE" => "Indonesien",
				"SW" => "Indonesia",
				"IT" => "Indonesia",
				"TR" => "Endonezya"
			],
			"continent" => "Asia"
		],
		"IR" => [
			"alpha2"    => "IR",
			"name"      => [
				"ES" => "Irán",
				"EN" => "Iran",
				"FR" => "Iran",
				"PT" => [
					"Irã",
					"Irão"
				],
				"DE" => "Iran",
				"SW" => "Uajemi",
				"IT" => "Iran",
				"TR" => "İran"
			],
			"continent" => "Asia"
		],
		"IQ" => [
			"alpha2"    => "IQ",
			"name"      => [
				"ES" => [
					"Iraq",
				    "Irak"
				],
				"EN" => "Iraq",
				"FR" => "Irak",
				"PT" => "Iraque",
				"DE" => "Irak",
				"SW" => "Iraq",
				"IT" => "Iraq",
				"TR" => "Irak"
			],
			"continent" => "Asia"
		],
		"IE" => [
			"alpha2"    => "IE",
			"name"      => [
				"ES" => "Irlanda",
				"EN" => "Ireland",
				"FR" => "Irlande",
				"PT" => "Irlanda",
				"DE" => "Irland",
				"SW" => [
					"Ayalandi",
				    "Ueire"
				],
				"IT" => "Irlanda",
				"TR" => "İrlanda"
			],
			"continent" => "Europe"
		],
		"IL" => [
			"alpha2"    => "IL",
			"name"      => [
				"ES" => "Israel",
				"EN" => "Israel",
				"FR" => "Israël",
				"PT" => "Israel",
				"DE" => "Israel",
				"SW" => "Israel",
				"IT" => "Israele",
				"TR" => "İsrail"
			],
			"continent" => "Asia"
		],
		"IT" => [
			"alpha2"    => "IT",
			"name"      => [
				"ES" => "Italia",
				"EN" => "Italy",
				"FR" => "Italie",
				"PT" => "Itália",
				"DE" => "Italien",
				"SW" => "Italia",
				"IT" => "Italia",
				"TR" => "İtalya"
			],
			"continent" => "Europe"
		],
		"JM" => [
			"alpha2"    => "JM",
			"name"      => [
				"ES" => "Jamaica",
				"EN" => "Jamaica",
				"FR" => "Jamaïque",
				"PT" => "Jamaica",
				"DE" => "Jamaika",
				"SW" => "Jamaika",
				"IT" => "Giamaica",
				"TR" => "Jamaika"
			],
			"continent" => "North America"
		],
		"JP" => [
			"alpha2"    => "JP",
			"name"      => [
				"ES" => "Japón",
				"EN" => "Japan",
				"FR" => "Japon",
				"PT" => "Japão",
				"DE" => "Japan",
				"SW" => "Japani",
				"IT" => "Giappone",
				"TR" => "Japonya"
			],
			"continent" => "Asia"
		],
		"JO" => [
			"alpha2"    => "JO",
			"name"      => [
				"ES" => [
					"Jordania",
				    "Transjordania"
				],
				"EN" => [
					"Jordan",
					"Transjordan"
				],
				"FR" => [
					"Jordanie",
					"Transjordanie"
				],
				"PT" => [
					"Jordânia",
				    "Transjordânia"
				],
				"DE" => [
					"Jordanien",
				    "Transjordanien"
				],
				"SW" => "Yordani",
				"IT" => [
					"Giordania",
					"Transgiordania"
				],
				"TR" => [
					"Ürdün",
				    "Mavera-i Ürdün"
				]
			],
			"continent" => "Asia"
		],
		"KZ" => [
			"alpha2"    => "KZ",
			"name"      => [
				"ES" => [
					"Kazajistán",
				    "Kazajstán"
				],
				"EN" => "Kazakhstan",
				"FR" => "Kazakhstan",
				"PT" => [
					"Cazaquistão",
				    "Casaquistão"
				],
				"DE" => "Kasachstan",
				"SW" => "Kazakhstan",
				"IT" => "Kazakistan",
				"TR" => "Kazakistan"
			],
			"continent" => "Asia"
		],
		"KE" => [
			"alpha2"    => "KE",
			"name"      => [
				"ES" => "Kenia",
				"EN" => "Kenya",
				"FR" => "Kenya",
				"PT" => [
					"Quênia",
				    "Quénia"
				],
				"DE" => "Kenia",
				"SW" => "Kenya",
				"IT" => "Kenya",
				"TR" => "Kenya"
			],
			"continent" => "Africa"
		],
		"KI" => [
			"alpha2"    => "KI",
			"name"      => [
				"ES" => "Kiribati",
				"EN" => "Kiribati",
				"FR" => "Kiribati",
				"PT" => [
					"Quiribati",
				    "Kiribati"
				],
				"DE" => "Kiribati",
				"SW" => "Kiribati",
				"IT" => "Kiribati",
				"TR" => "Kiribati"
			],
			"continent" => "Oceania"
		],
		"KP" => [
			"alpha2"    => "KP",
			"name"      => [
				"ES" => "Corea del Norte",
				"EN" => [
					"North Korea",
					"Democratic People's Republic of Korea"
				],
				"FR" => "Corée du Nord",
				"PT" => [
					"Coréia do Norte",
				    "Coreia do Norte"
				],
				"DE" => "Nordkorea",
				"SW" => "Korea Kaskazini",
				"IT" => "Corea del Nord",
				"TR" => "Kuzey Kore"

			],
			"continent" => "Asia"
		],
		"KR" => [
			"alpha2"    => "KR",
			"name"      => [
				"ES" => "Corea del Sur",
				"EN" => [
					"South Korea",
					"Republic of Korea"
				],
				"FR" => "Corée du Sud",
				"PT" => [
					"Coréia do Sul",
					"Coreia do Sul",
				],
				"DE" => "Südkorea",
				"SW" => "Korea Kusini",
				"IT" => "Corea del Sud",
				"TR" => "Güney Kore"

			],
			"continent" => "Asia"
		],
		"KW" => [
			"alpha2"    => "KW",
			"name"      => [
				"ES" => "Kuwait",
				"EN" => "Kuwait",
				"FR" => "Koweït",
				"PT" => [
					"Koweit",
				    "Coveoite",
				    "Kuwait"
				],
				"DE" => "Kuwait",
				"SW" => "Kuwait",
				"IT" => "Kuwait",
				"TR" => "Kuveyt"
			],
			"continent" => "Asia"
		],
		"KG" => [
			"alpha2"    => "KG",
			"name"      => [
				"ES" => [
					"Kirguistán",
				    "Kirguizistán",
				    "Kirguisia"
				],
				"EN" => [
					"Kyrgyzstan",
					"Kirghizia"
				],
				"FR" => "Kirghizistan",
				"PT" => [
					"Quirguistão",
				    "Quirguízia",
				    "Quirguizistão"
				],
				"DE" => "Kirgisistan",
				"SW" => "Kirgizia",
				"IT" => [
					"Kirghizistan",
				    "Kirghizia"
				],
				"TR" => "Kırgızistan"
			],
			"continent" => "Asia"
		],
		"LA" => [
			"alpha2"    => "LA",
			"name"      => [
				"ES" => "Laos",
				"EN" => [
					"Laos",
					"Lao People's Democratic Republic"
				],
				"FR" => "Laos",
				"PT" => "Laos",
				"DE" => "Laos",
				"SW" => "Laos",
				"IT" => "Laos",
				"TR" => "Laos"

			],
			"continent" => "Asia"
		],
		"LV" => [
			"alpha2"    => "LV",
			"name"      => [
				"ES" => "Letonia",
				"EN" => "Latvia",
				"FR" => "Lettonie",
				"PT" => [
					"Letônia",
				    "Letónia"
				],
				"DE" => "Lettland",
				"SW" => "Latvia",
				"IT" => "Lettonia",
				"TR" => "Letonya"
			],
			"continent" => "Europe"
		],
		"LB" => [
			"alpha2"    => "LB",
			"name"      => [
				"ES" => "Líbano",
				"EN" => "Lebanon",
				"FR" => "Liban",
				"PT" => "Líbano",
				"DE" => "Libanon",
				"SW" => "Lebanoni",
				"IT" => "Libano",
				"TR" => "Lübnan"
			],
			"continent" => "Asia"
		],
		"LS" => [
			"alpha2"    => "LS",
			"name"      => [
				"ES" => [
					"Lesotho",
					"Lesoto"
				],
				"EN" => "Lesotho",
				"FR" => "Lesotho",
				"PT" => "Lesoto",
				"DE" => "Lesotho",
				"SW" => "Lesotho",
				"IT" => "Lesotho",
				"TR" => "Lesotho"
			],
			"continent" => "Africa"
		],
		"LR" => [
			"alpha2"    => "LR",
			"name"      => [
				"ES" => "Liberia",
				"EN" => "Liberia",
				"FR" => "Liberia",
				"PT" => "Libéria",
				"DE" => "Liberia",
				"SW" => "Liberia",
				"IT" => "Liberia",
				"TR" => "Liberya"
			],
			"continent" => "Africa"
		],
		"LY" => [
			"alpha2"    => "LY",
			"name"      => [
				"ES" => "Libia",
				"EN" => "Libya",
				"FR" => "Libye",
				"PT" => "Líbia",
				"DE" => "Libyen",
				"SW" => "Libya",
				"IT" => "Libia",
				"TR" => "Libya"
			],
			"continent" => "Africa"
		],
		"LI" => [
			"alpha2"    => "LI",
			"name"      => [
				"ES" => "Liechtenstein",
				"EN" => "Liechtenstein",
				"FR" => "Liechtenstein",
				"PT" => [
					"Liechtenstein",
				    "Listenstaina",
				    "Listenstaine"
				],
				"DE" => "Liechtenstein",
				"SW" => "Liechtenstein",
				"IT" => "Liechtenstein",
				"TR" => "Lihtenştayn"
			],
			"continent" => "Europe"
		],
		"LT" => [
			"alpha2"    => "LT",
			"name"      => [
				"ES" => "Lituania",
				"EN" => "Lithuania",
				"FR" => "Lituanie",
				"PT" => "Lituânia",
				"DE" => "Litauen",
				"SW" => "Lituanya",
				"IT" => "Lituania",
				"TR" => "Litvanya"
			],
			"continent" => "Europe"
		],
		"LU" => [
			"alpha2"    => "LU",
			"name"      => [
				"ES" => "Luxemburgo",
				"EN" => [
					"Luxembourg",
					"Luxemburg"
				],
				"FR" => "Luxembourg",
				"PT" => "Luxemburgo",
				"DE" => "Luxemburg",
				"SW" => "Luxemburg",
				"IT" => "Lussemburgo",
				"TR" => "Lüksemburg"
			],
			"continent" => "Europe"
		],
		"MK" => [
			"alpha2"    => "MK",
			"name"      => [
				"ES" => "Macedonia",
				"EN" => "Macedonia",
				"FR" => "Macédoine",
				"PT" => [
					"Macedônia",
				    "Macedónia"
				],
				"DE" => "Mazedonien",
				"SW" => "Masedonia",
				"IT" => "Macedonia",
				"TR" => "Makedonya"
			],
			"continent" => "Europe"
		],
		"MG" => [
			"alpha2"    => "MG",
			"name"      => [
				"ES" => "Madagascar",
				"EN" => "Madagascar",
				"FR" => "Madagascar",
				"PT" => [
				    "Madagascar",
				    "Madagáscar"
				],
				"DE" => "Madagaskar",
				"SW" => "Madagaska",
				"IT" => "Madagascar",
				"TR" => "Madagaskar"
			],
			"continent" => "Africa"
		],
		"MW" => [
			"alpha2"    => "MW",
			"name"      => [
				"ES" => "Malawi",
				"EN" => "Malawi",
				"FR" => "Malawi",
				"PT" => [
					"Malaui",
				    "Malawi",
				    "Malauí",
				    "Maláui",
				    "Malavi",
				    "Malávia"
				],
				"DE" => "Malawi",
				"SW" => "Malawi",
				"IT" => "Malawi",
				"TR" => [
					"Malavi",
				    "Malawi"
				]
			],
			"continent" => "Africa"
		],
		"MY" => [
			"alpha2"    => "MY",
			"name"      => [
				"ES" => "Malasia",
				"EN" => "Malaysia",
				"FR" => "Malaisie",
				"PT" => [
					"Malaísia",
				    "Malásia"
				],
				"DE" => "Malaysia",
				"SW" => "Malaysia",
				"IT" => [
					"Malaysia",
					"Malesia"
				],
				"TR" => "Malezya"
			],
			"continent" => "Asia"
		],
		"MV" => [
			"alpha2"    => "MV",
			"name"      => [
				"ES" => "Maldivas",
				"EN" => "Maldives",
				"FR" => "Maldives",
				"PT" => "Maldivas",
				"DE" => "Malediven",
				"SW" => "Maldivi",
				"IT" => "Maldive",
				"TR" => "Maldivler"
			],
			"continent" => "Asia"
		],
		"ML" => [
			"alpha2"    => "ML",
			"name"      => [
				"ES" => [
					"Malí",
					"Mali"
				],
				"EN" => "Mali",
				"FR" => "Mali",
				"PT" => [
					"Malí",
					"Mali"
				],
				"DE" => "Mali",
				"SW" => "Mali",
				"IT" => "Mali",
				"TR" => "Mali"
			],
			"continent" => "Africa"
		],
		"MT" => [
			"alpha2"    => "MT",
			"name"      => [
				"ES" => "Malta",
				"EN" => "Malta",
				"FR" => "Malte",
				"PT" => "Malta",
				"DE" => "Malta",
				"SW" => "Malta",
				"IT" => "Malta",
				"TR" => "Malta"
			],
			"continent" => "Europe"
		],
		"MH" => [
			"alpha2"    => "MH",
			"name"      => [
				"ES" => "Islas Marshall",
				"EN" => "Marshall Islands",
				"FR" => [
					"Îles Marshall",
				    "Marshal"
				],
				"PT" => "Ilhas Marshall",
				"DE" => "Marshallinseln",
				"SW" => "Visiwa vya Marshall",
				"IT" => "Isole Marshall",
				"TR" => "Marshall Adaları"
			],
			"continent" => "Oceania"
		],
		"MR" => [
			"alpha2"    => "MR",
			"name"      => [
				"ES" => "Mauritania",
				"EN" => "Mauritania",
				"FR" => "Mauritanie",
				"PT" => "Mauritânia",
				"DE" => "Mauretanien",
				"SW" => "Mauritania",
				"IT" => "Mauritania",
				"TR" => "Moritanya"
			],
			"continent" => "Africa"
		],
		"MU" => [
			"alpha2"    => "MU",
			"name"      => [
				"ES" => "Mauricio",
				"EN" => "Mauritius",
				"FR" => "Maurice",
				"PT" => [
					"Maurícias",
					"Maurícia",
				    "Maurício"
				],
				"DE" => "Mauritius",
				"SW" => "Morisi",
				"IT" => "Mauritius",
				"TR" => "Mauritius"
			],
			"continent" => "Africa"
		],
		"MX" => [
			"alpha2"    => "MX",
			"name"      => [
				"ES" => [
					"México",
					"Méjico"
				],
				"EN" => "Mexico",
				"FR" => "Mexique",
				"PT" => "México",
				"DE" => "Mexiko",
				"SW" => "Mexiko",
				"IT" => "Messico",
				"TR" => "Meksika"
			],
			"continent" => "North America"
		],
		"FM" => [
			"alpha2"    => "FM",
			"name"      => [
				"ES" => "Micronesia",
				"EN" => "Micronesia",
				"FR" => "Micronésie",
				"PT" => "Micronésia",
				"DE" => "Mikronesien",
				"SW" => "Mikronesia",
				"IT" => "Micronesia",
				"TR" => "Mikronezya"
			],
			"continent" => "Oceania"
		],
		"MD" => [
			"alpha2"    => "MD",
			"name"      => [
				"ES" => [
					"Moldavia",
					"Moldova"
				],
				"EN" => "Moldova",
				"FR" => "Moldavie",
				"PT" => [
					"Moldávia",
				    "Moldova"
				],
				"DE" => [
					"Moldawien",
				    "Moldau"
				],
				"SW" => "Moldova",
				"IT" => [
					"Moldavia",
				    "Moldova"
				],
				"TR" => "Moldova"
			],
			"continent" => "Europe"
		],
		"MC" => [
			"alpha2"    => "MC",
			"name"      => [
				"ES" => "Mónaco",
				"EN" => "Monaco",
				"FR" => "Monaco",
				"PT" => [
					"Mônaco",
					"Mónaco"
				],
				"DE" => "Monaco",
				"SW" => "Monako",
				"IT" => "Monaco",
				"TR" => "Monako"
			],
			"continent" => "Europe"
		],
		"MN" => [
			"alpha2"    => "MN",
			"name"      => [
				"ES" => "Mongolia",
				"EN" => "Mongolia",
				"FR" => "Mongolie",
				"PT" => "Mongólia",
				"DE" => "Mongolei",
				"SW" => "Mongolia",
				"IT" => "Mongolia",
				"TR" => "Moğolistan"
			],
			"continent" => "Asia"
		],
		"ME" => [
			"alpha2"    => "ME",
			"name"      => [
				"ES" => "Montenegro",
				"EN" => "Montenegro",
				"FR" => "Monténégro",
				"PT" => "Montenegro",
				"DE" => "Montenegro",
				"SW" => "Montenegro",
				"IT" => "Montenegro",
				"TR" => "Karadağ"
			],
			"continent" => "Europe"
		],
		"MA" => [
			"alpha2"    => "MA",
			"name"      => [
				"ES" => "Marruecos",
				"EN" => "Morocco",
				"FR" => "Maroc",
				"PT" => "Marrocos",
				"DE" => "Marokko",
				"SW" => "Moroko",
				"IT" => "Marocco",
				"TR" => "Fas"
			],
			"continent" => "Africa"
		],
		"MZ" => [
			"alpha2"    => "MZ",
			"name"      => [
				"ES" => "Mozambique",
				"EN" => "Mozambique",
				"FR" => "Mozambique",
				"PT" => "Moçambique",
				"DE" => "Mosambik",
				"SW" => "Msumbiji",
				"IT" => "Mozambico",
				"TR" => "Mozambik"
			],
			"continent" => "Africa"
		],
		"MM" => [
			"alpha2"    => "MM",
			"name"      => [
				"ES" => [
					"Myanmar",
					"Birmania"
				],
				"EN" => [
					"Myanmar",
					"Burma"
				],
				"FR" => [
					"Myanmar",
					"Birmanie"
				],
				"PT" => [
					"Myanmar",
					"Mianmá",
					"Mianmar",
					"Birmânia",
					"Burma"
				],
				"DE" => [
					"Myanmar",
					"Birma"
				],
				"SW" => [
					"Myanmar",
				    "Burma",
				    "Bama"
				],
				"IT" => [
					"Myanmar",
				    "Birmania"
				],
				"TR" => [
					"Myanmar",
					"Birmanya"
				]
			],
			"continent" => "Asia"
		],
		"NA" => [
			"alpha2"    => "NA",
			"name"      => [
				"ES" => "Namibia",
				"EN" => "Namibia",
				"FR" => "Namibie",
				"PT" => "Namíbia",
				"DE" => "Namibia",
				"SW" => "Namibia",
				"IT" => "Namibia",
				"TR" => "Namibya"
			],
			"continent" => "Africa"
		],
		"NR" => [
			"alpha2"    => "NR",
			"name"      => [
				"ES" => "Nauru",
				"EN" => "Nauru",
				"FR" => "Nauru",
				"PT" => "Nauru",
				"DE" => "Nauru",
				"SW" => "Nauru",
				"IT" => "Nauru",
				"TR" => "Nauru"
			],
			"continent" => "Oceania"
		],
		"NP" => [
			"alpha2"    => "NP",
			"name"      => [
				"ES" => "Nepal",
				"EN" => "Nepal",
				"FR" => "Népal",
				"PT" => "Nepal",
				"DE" => "Nepal",
				"SW" => "Nepal",
				"IT" => "Nepal",
				"TR" => "Nepal"
			],
			"continent" => "Asia"
		],
		"NL" => [
			"alpha2"    => "NL",
			"name"      => [
				"ES" => [
					"Países Bajos",
					"Holanda",
					"Aruba",
					"Curazao",
					"Sint Maarten"
				],
				"EN" => [
					"Netherlands",
					"Holland",
					"Aruba",
					"Curaçao",
					"Sint Maarten"
				],
				"FR" => [
			         "Pays-Bas",
			         "Hollande",
			         "Aruba",
			         "Curaçao",
			         "Saint-Martin"
				],
				"PT" => [
			         "Países Baixos",
			         "Holanda",
			         "Aruba",
			         "Curaçao",
			         "São Martinho"
				],
				"DE" => [
			         "Niederlande",
			         "Holland",
			         "Aruba",
			         "Curaçao",
			         "Sint Maarten"
				],
				"SW" => [
			         "Uholanzi",
			         "Holland",
			         "Aruba",
			         "Korsou",
			         "Sint Maarten"
				],
				"IT" => [
			         "Paesi Bassi",
			         "Olanda",
			         "Aruba",
			         "Curaçao",
			         "Sint Maarten"
				],
				"TR" => [
			         "Hollanda",
			         "Aruba",
			         "Curaçao",
			         "Sint Maarten"
				]
			],
			"continent" => "Europe"
		],
		"NU" => [
			"alpha2"    => "NU",
			"name"      => [
				"ES" => [
					"Niue",
					"Niué"
				],
				"EN" => "Niue",
				"FR" => [
					"Niue",
					"Niué",
					"Nioué"
				],
				"PT" => [
					"Niue",
					"Niuê"
				],
				"DE" => "Niue",
				"SW" => "Niue",
				"IT" => "Niue",
				"TR" => "Niue"
			],
			"continent" => "Oceania"
		],
		"NZ" => [
			"alpha2"    => "NZ",
			"name"      => [
				"ES" => [
					"Nueva Zelanda",
				    "Nueva Zelandia"
				],
				"EN" => "New Zealand",
				"FR" => "Nouvelle-Zélande",
				"PT" => "Nova Zelândia",
				"DE" => "Neuseeland",
				"SW" => "Nyuzilandi",
				"IT" => "Nuova Zelanda",
				"TR" => "Yeni Zelanda"
			],
			"continent" => "Oceania"
		],
		"NI" => [
			"alpha2"    => "NI",
			"name"      => [
				"ES" => "Nicaragua",
				"EN" => "Nicaragua",
				"FR" => "Nicaragua",
				"PT" => "Nicarágua",
				"DE" => "Nicaragua",
				"SW" => "Nikaragua",
				"IT" => "Nicaragua",
				"TR" => "Nikaragua"
			],
			"continent" => "North America"
		],
		"NE" => [
			"alpha2"    => "NE",
			"name"      => [
				"ES" => "Níger",
				"EN" => "Niger",
				"FR" => "Niger",
				"PT" => "Níger",
				"DE" => "Niger",
				"SW" => "Niger",
				"IT" => "Niger",
				"TR" => "Nijer"
			],
			"continent" => "Africa"
		],
		"NG" => [
			"alpha2"    => "NG",
			"name"      => [
				"ES" => "Nigeria",
				"EN" => "Nigeria",
				"FR" => "Nigeria",
				"PT" => "Nigéria",
				"DE" => "Nigeria",
				"SW" => [
					"Nigeria",
					"Naijeria"
				],
				"IT" => "Nigeria",
				"TR" => "Nijerya"
			],
			"continent" => "Africa"
		],
		"NO" => [
			"alpha2"    => "NO",
			"name"      => [
				"ES" => [
					"Noruega",
				    "Svalbard"
				],
				"EN" => [
					"Norway",
					"Svalbard"
				],
				"FR" => [
					"Norvège",
					"Svalbard"
				],
				"PT" => [
					"Noruega",
					"Svalbard"
				],
				"DE" => [
					"Norwegen",
					"Svalbard",
					"Spitzbergen"
				],
				"SW" => [
					"Norwei",
					"Svalbard"
				],
				"IT" => [
					"Norvegia",
					"Svalbard"
				],
				"TR" => [
					"Norveç",
					"Svalbard"
				],
			],
			"continent" => "Europe"
		],
		"OM" => [
			"alpha2"    => "OM",
			"name"      => [
				"ES" => "Omán",
				"EN" => "Oman",
				"FR" => "Oman",
				"PT" => [
					"Omã",
					"Omão"
				],
				"DE" => "Oman",
				"SW" => "Omani",
				"IT" => "Oman",
				"TR" => "Umman"
			],
			"continent" => "Asia"
		],
		"PK" => [
			"alpha2"    => "PK",
			"name"      => [
				"ES" => "Pakistán",
				"EN" => "Pakistan",
				"FR" => "Pakistan",
				"PT" => "Paquistão",
				"DE" => "Pakistan",
				"SW" => "Pakistan",
				"IT" => "Pakistan",
				"TR" => "Pakistan"
			],
			"continent" => "Asia"
		],
		"PW" => [
			"alpha2"    => "PW",
			"name"      => [
				"ES" => "Palau",
				"EN" => "Palau",
				"FR" => "Palaos",
				"PT" => "Palau",
				"DE" => "Palau",
				"SW" => "Palau",
				"IT" => "Palau",
				"TR" => "Palau"
			],
			"continent" => "Oceania"
		],
		"PS" => [
			"alpha2"    => "PS",
			"name"      => [
				"ES" => "Palestina",
				"EN" => [
					"Palestine",
					"Palestinia"
				],
				"FR" => "Palestine",
				"PT" => "Palestina",
				"DE" => "Palästina",
				"SW" => "Palestina",
				"IT" => "Palestina",
				"TR" => "Filistin"

			],
			"continent" => "Asia"
		],
		"PA" => [
			"alpha2"    => "PA",
			"name"      => [
				"ES" => "Panamá",
				"EN" => "Panama",
				"FR" => "Panamá",
				"PT" => "Panamá",
				"DE" => "Panama",
				"SW" => "Panama",
				"IT" => "Panamá",
				"TR" => "Panama"
			],
			"continent" => "North America"
		],
		"PG" => [
			"alpha2"    => "PG",
			"name"      => [
				"ES" => "Papúa Nueva Guinea",
				"EN" => "Papua New Guinea",
				"FR" => "Papouasie-Nouvelle-Guinée",
				"PT" => [
					"Papua-Nova Guiné",
				    "Papuásia-Nova Guiné"
				],
				"DE" => "Papua-Neuguinea",
				"SW" => [
					"Papua Guinea Mpya",
					"Papua Niugini"
				],
				"IT" => "Papua-Nuova Guinea",
				"TR" => "Papua Yeni Gine"
			],
			"continent" => "Oceania"
		],
		"PY" => [
			"alpha2"    => "PY",
			"name"      => [
				"ES" => "Paraguay",
				"EN" => "Paraguay",
				"FR" => "Paraguay",
				"PT" => "Paraguai",
				"DE" => "Paraguay",
				"SW" => [
					"Paraguay",
					"Paragwai"
				],
				"IT" => "Paraguay",
				"TR" => "Paraguay"
			],
			"continent" => "South America"
		],
		"PE" => [
			"alpha2"    => "PE",
			"name"      => [
				"ES" => "Perú",
				"EN" => "Peru",
				"FR" => "Pérou",
				"PT" => "Peru",
				"DE" => "Peru",
				"SW" => "Peru",
				"IT" => "Perù",
				"TR" => "Peru"
			],
			"continent" => "South America"
		],
		"PH" => [
			"alpha2"    => "PH",
			"name"      => [
				"ES" => "Filipinas",
				"EN" => "Philippines",
				"FR" => "Philippines",
				"PT" => "Filipinas",
				"DE" => "Philippinen",
				"SW" => "Ufilipino",
				"IT" => "Filippine",
				"TR" => "Filipinler"
			],
			"continent" => "Asia"
		],
		"PL" => [
			"alpha2"    => "PL",
			"name"      => [
				"ES" => "Polonia",
				"EN" => "Poland",
				"FR" => "Pologne",
				"PT" => [
					"Polônia",
				    "Polónia"
				],
				"DE" => "Polen",
				"SW" => "Poland",
				"IT" => "Polonia",
				"TR" => "Polonya"
			],
			"continent" => "Europe"
		],
		"PT" => [
			"alpha2"    => "PT",
			"name"      => [
				"ES" => "Portugal",
				"EN" => "Portugal",
				"FR" => "Portugal",
				"PT" => "Portugal",
				"DE" => "Portugal",
				"SW" => "Ureno",
				"IT" => "Portogallo",
				"TR" => "Portekiz"
			],
			"continent" => "Europe"
		],
		"QA" => [
			"alpha2"    => "QA",
			"name"      => [
				"ES" => "Qatar",
				"EN" => "Qatar",
				"FR" => "Qatar",
				"PT" => [
					"Qatar",
				    "Catar"
				],
				"DE" => "Katar",
				"SW" => "Qatar",
				"IT" => "Qatar",
				"TR" => "Katar"
			],
			"continent" => "Asia"
		],
		"RO" => [
			"alpha2"    => "RO",
			"name"      => [
				"ES" => [
					"Rumania",
				    "Rumanía"
				],
				"EN" => "Romania",
				"FR" => "Roumanie",
				"PT" => [
					"Romênia",
				    "Roménia"
				],
				"DE" => "Rumänien",
				"SW" => "Romania",
				"IT" => "Romania",
				"TR" => "Romanya"
			],
			"continent" => "Europe"
		],
		"RU" => [
			"alpha2"    => "RU",
			"name"      => [
				"ES" => "Rusia",
				"EN" => [
					"Russia",
					"Russian Federation"
				],
				"FR" => "Russie",
				"PT" => "Rússia",
				"DE" => "Russland",
				"SW" => "Urusi",
				"IT" => "Russia",
				"TR" => "Rusya"

			],
			"continent" => "Europe"
		],
		"RW" => [
			"alpha2"    => "RW",
			"name"      => [
				"ES" => "Ruanda",
				"EN" => "Rwanda",
				"FR" => [
					"Rwanda",
				    "Rouanda"
				],
				"PT" => "Ruanda",
				"DE" => "Ruanda",
				"SW" => [
					"Rwanda",
					"Ruanda"
				],
				"IT" => "Ruanda",
				"TR" => "Ruanda"
			],
			"continent" => "Africa"
		],
		"KN" => [
			"alpha2"    => "KN",
			"name"      => [
				"ES" => "San Cristóbal y Nieves",
				"EN" => "Saint Kitts and Nevis",
				"FR" => "Saint-Christophe-et-Niévès",
				"PT" => [
					"Saint Kitts e Nevis",
				    "São Cristóvão e Nevis"
				],
				"DE" => "Saint Kitts und Nevis",
				"SW" => "Saint Kitts na Nevis",
				"IT" => "Saint Kitts e Nevis",
				"TR" => [
					"Saint Kitts ve Nevis",
				    "Saint Christopher ve Nevis"
				]
			],
			"continent" => "North America"
		],
		"LC" => [
			"alpha2"    => "LC",
			"name"      => [
				"ES" => "Santa Lucía",
				"EN" => "Saint Lucia",
				"FR" => "Sainte-Lucie",
				"PT" => "Santa Lúcia",
				"DE" => "Saint Lucia",
				"SW" => "Saint Lucia",
				"IT" => "Santa Lucia",
				"TR" => "Saint Lucia"
			],
			"continent" => "North America"
		],
		"VC" => [
			"alpha2"    => "VC",
			"name"      => [
				"ES" => "San Vicente y las Granadinas",
				"EN" => "Saint Vincent and The Grenadines",
				"FR" => "Saint-Vincent-et-les Grenadines",
				"PT" => "São Vicente e as Granadinas",
				"DE" => "Saint Vincent und die Grenadinen",
				"SW" => "Saint Vincent na Grenadini",
				"IT" => "Saint Vincent e Grenadine",
				"TR" => "Saint Vincent ve Grenadinler"
			],
			"continent" => "North America"
		],
		"WS" => [
			"alpha2"    => "WS",
			"name"      => [
				"ES" => "Samoa",
				"EN" => "Samoa",
				"FR" => "Samoa",
				"PT" => "Samoa",
				"DE" => "Samoa",
				"SW" => "Samoa",
				"IT" => "Samoa",
				"TR" => "Samoa"
			],
			"continent" => "Oceania"
		],
		"SM" => [
			"alpha2"    => "SM",
			"name"      => [
				"ES" => "San Marino",
				"EN" => "San Marino",
				"FR" => "Saint-Marin",
				"PT" => [
				    "San Marino",
				    "São Marinho",
				    "São Marino"
				],
				"DE" => "San Marino",
				"SW" => "San Marino",
				"IT" => "San Marino",
				"TR" => "San Marino"
			],
			"continent" => "Europe"
		],
		"ST" => [
			"alpha2"    => "ST",
			"name"      => [
				"ES" => "Santo Tomé y Príncipe",
				"EN" => [
					"Sao Tome and Principe",
					"São Tomé and Príncipe"
				],
				"FR" => "São Tomé-et-Príncipe",
				"PT" => "São Tomé and Príncipe",
				"DE" => "São Tomé und Príncipe",
				"SW" => [
					"Sao Tome na Principe",
					"São Tomé na Príncipe"
				],
				"IT" => "Sao Tomé e Principe",
				"TR" => "São Tomé ve Príncipe"
			],
			"continent" => "Africa"
		],
		"SA" => [
			"alpha2"    => "SA",
			"name"      => [
				"ES" => "Arabia Saudita",
				"EN" => "Saudi Arabia",
				"FR" => "Arabie Saoudite",
				"PT" => "Arábia Saudita",
				"DE" => "Saudi-Arabien",
				"SW" => "Saudia",
				"IT" => "Arabia Saudita",
				"TR" => "Suudi Arabistan"
			],
			"continent" => "Asia"
		],
		"SN" => [
			"alpha2"    => "SN",
			"name"      => [
				"ES" => "Senegal",
				"EN" => "Senegal",
				"FR" => "Sénégal",
				"PT" => "Senegal",
				"DE" => "Senegal",
				"SW" => "Senegal",
				"IT" => "Senegal",
				"TR" => "Senegal"
			],
			"continent" => "Africa"
		],
		"RS" => [
			"alpha2"    => "RS",
			"name"      => [
				"ES" => "Serbia",
				"EN" => "Serbia",
				"FR" => "Serbie",
				"PT" => "Sérvia",
				"DE" => "Serbien",
				"SW" => "Serbia",
				"IT" => "Serbia",
				"TR" => "Sırbistan"
			],
			"continent" => "Europe"
		],
		"SC" => [
			"alpha2"    => "SC",
			"name"      => [
				"ES" => "Seychelles",
				"EN" => "Seychelles",
				"FR" => "Seychelles",
				"PT" => [
					"Seychelles",
					"Seicheles"
				],
				"DE" => "Seychellen",
				"SW" => "Shelisheli",
				"IT" => "Seychelles",
				"TR" => "Seyşeller"
			],
			"continent" => "Africa"
		],
		"SL" => [
			"alpha2"    => "SL",
			"name"      => [
				"ES" => "Sierra Leona",
				"EN" => "Sierra Leone",
				"FR" => "Sierra Leone",
				"PT" => "Serra Leoa",
				"DE" => "Sierra Leone",
				"SW" => "Sierra Leone",
				"IT" => "Sierra Leone",
				"TR" => "Sierra Leone"
			],
			"continent" => "Africa"
		],
		"SG" => [
			"alpha2"    => "SG",
			"name"      => [
				"ES" => "Singapur",
				"EN" => "Singapore",
				"FR" => "Singapour",
				"PT" => [
					"Singapura",
				    "Cingapura"
				],
				"DE" => "Singapur",
				"SW" => "Singapuri",
				"IT" => "Singapore",
				"TR" => "Singapur"
			],
			"continent" => "Asia"
		],
		"SK" => [
			"alpha2"    => "SK",
			"name"      => [
				"ES" => "Eslovaquia",
				"EN" => "Slovakia",
				"FR" => "Slovaquie",
				"PT" => "Eslováquia",
				"DE" => "Slowakei",
				"SW" => "Slovakia",
				"IT" => "Slovacchia",
				"TR" => "Slovakya"
			],
			"continent" => "Europe"
		],
		"SI" => [
			"alpha2"    => "SI",
			"name"      => [
				"ES" => "Eslovenia",
				"EN" => "Slovenia",
				"FR" => "Slovénie",
				"PT" => [
					"Eslovênia",
					"Eslovénia"
				],
				"DE" => "Slowenien",
				"SW" => "Slovenia",
				"IT" => "Slovenia",
				"TR" => "Slovenya"
			],
			"continent" => "Europe"
		],
		"SB" => [
			"alpha2"    => "SB",
			"name"      => [
				"ES" => "Islas Salomón",
				"EN" => "Solomon Islands",
				"FR" => "Îles Salomon",
				"PT" => "Ilhas Salomão",
				"DE" => "Salomonen",
				"SW" => "Visiwa vya Solomon",
				"IT" => "Isole Salomone",
				"TR" => "Solomon Adaları"
			],
			"continent" => "Oceania"
		],
		"SO" => [
			"alpha2"    => "SO",
			"name"      => [
				"ES" => "Somalia",
				"EN" => "Somalia",
				"FR" => "Somalie",
				"PT" => "Somália",
				"DE" => "Somalia",
				"SW" => "Somalia",
				"IT" => "Somalia",
				"TR" => "Somali"
			],
			"continent" => "Africa"
		],
		"ZA" => [
			"alpha2"    => "ZA",
			"name"      => [
				"ES" => "Sudáfrica",
				"EN" => "South Africa",
				"FR" => "Afrique du Sud",
				"PT" => "África do Sul",
				"DE" => "Südafrika",
				"SW" => "Afrika Kusini",
				"IT" => "Sud Africa",
				"TR" => "Güney Afrika"
			],
			"continent" => "Africa"
		],
		"SS" => [
			"alpha2"    => "SS",
			"name"      => [
				"ES" => "Sudán del Sur",
				"EN" => "South Sudan",
				"FR" => "Soudan du Sud",
				"PT" => [
					"Sudão do Sul",
					"Sudão Meridional"
				],
				"DE" => "Südsudan",
				"SW" => "Sudan Kusini",
				"IT" => "Sudan del Sud",
				"TR" => "Güney Sudan"
			],
			"continent" => "Africa"
		],

		"ES" => [
			"alpha2"    => "ES",
			"name"      => [
				"ES" => "España",
				"EN" => "Spain",
				"FR" => "Espagne",
				"PT" => "Espanha",
				"DE" => "Spanien",
				"SW" => "Hispania",
				"IT" => "Spagna",
				"TR" => "İspanya"
			],
			"continent" => "Europe"
		],
		"LK" => [
			"alpha2"    => "LK",
			"name"      => [
				"ES" => "Sri Lanka",
				"EN" => "Sri Lanka",
				"FR" => "Sri Lanka",
				"PT" => "Sri Lanka",
				"DE" => "Sri Lanka",
				"SW" => "Sri Lanka",
				"IT" => "Sri Lanka",
				"TR" => "Sri Lanka"
			],
			"continent" => "Asia"
		],
		"SD" => [
			"alpha2"    => "SD",
			"name"      => [
				"ES" => "Sudán",
				"EN" => "Sudan",
				"FR" => "Soudan",
				"PT" => "Sudão",
				"DE" => "Sudan",
				"SW" => "Sudan",
				"IT" => "Sudan",
				"TR" => "Sudan"
			],
			"continent" => "Africa"
		],
		"SR" => [
			"alpha2"    => "SR",
			"name"      => [
				"ES" => "Suriname",
				"EN" => [
					"Suriname",
					"Surinam"
				],
				"FR" => "Suriname",
				"PT" => "Suriname",
				"DE" => "Suriname",
				"SW" => "Surinam",
				"IT" => "Suriname",
				"TR" => "Surinam"
			],
			"continent" => "South America"
		],
		"SZ" => [
			"alpha2"    => "SZ",
			"name"      => [
				"ES" => "Swazilandia",
				"EN" => "Swaziland",
				"FR" => "Swaziland",
				"PT" => "Suazilândia",
				"DE" => "Swasiland",
				"SW" => "Uswazi",
				"IT" => "Swaziland",
				"TR" => "Svaziland"
			],
			"continent" => "Africa"
		],
		"SE" => [
			"alpha2"    => "SE",
			"name"      => [
				"ES" => "Suecia",
				"EN" => "Sweden",
				"FR" => "Suède",
				"PT" => "Suécia",
				"DE" => "Schweden",
				"SW" => [
					"Uswidi",
				    "Sweden",
				    "Swideni"
				],
				"IT" => "Svezia",
				"TR" => "İsveç"
			],
			"continent" => "Europe"
		],
		"CH" => [
			"alpha2"    => "CH",
			"name"      => [
				"ES" => "Suiza",
				"EN" => "Switzerland",
				"FR" => "Suisse",
				"PT" => "Suíça",
				"DE" => "Schweiz",
				"SW" => "Uswisi",
				"IT" => "Svizzera",
				"TR" => "İsviçre"
			],
			"continent" => "Europe"
		],
		"SY" => [
			"alpha2"    => "SY",
			"name"      => [
				"ES" => "Siria",
				"EN" => [
					"Syria",
					"Syrian Arab Republic"
				],
				"FR" => "Syrie",
				"PT" => "Síria",
				"DE" => "Syrien",
				"SW" => [
					"Syria",
				    "Siria"
				],
				"IT" => "Siria",
				"TR" => "Suriye"

			],
			"continent" => "Asia"
		],
		"TW" => [
			"alpha2"    => "TW",
			"name"      => [
				"ES" => "Taiwán",
				"EN" => "Taiwan",
				"FR" => "Taïwan",
				"PT" => [
					"Taiwan",
				    "Taiuã"
				],
				"DE" => "Taiwan",
				"SW" => "Taiwani",
				"IT" => "Taiwan",
				"TR" => "Tayvan"
			],
			"continent" => "Asia"
		],
		"TJ" => [
			"alpha2"    => "TJ",
			"name"      => [
				"ES" => "Tayikistán",
				"EN" => "Tajikistan",
				"FR" => "Tadjikistan",
				"PT" => [
					"Tajiquistão",
				    "Tadiquistão",
				    "Tadjiquistão"
				],
				"DE" => "Tadschikistan",
				"SW" => "Tajikistan",
				"IT" => "Tagikistan",
				"TR" => "Tacikistan"
			],
			"continent" => "Asia"
		],
		"TZ" => [
			"alpha2"    => "TZ",
			"name"      => [
				"ES" => "Tanzania",
				"EN" => "Tanzania",
				"FR" => "Tanzanie",
				"PT" => "Tanzânia",
				"DE" => "Tansania",
				"SW" => "Tanzania",
				"IT" => "Tanzania",
				"TR" => "Tanzanya"
			],
			"continent" => "Africa"
		],
		"TH" => [
			"alpha2"    => "TH",
			"name"      => [
				"ES" => "Tailandia",
				"EN" => "Thailand",
				"FR" => "Thaïlande",
				"PT" => "Tailândia",
				"DE" => "Thailand",
				"SW" => [
					"Uthai",
					"Thailand",
					"Tailandi",
					"Thailandi",
					"Tailendi"
				],
				"IT" => "Tailandia",
				"TR" => "Tayland"
			],
			"continent" => "Asia"
		],
		"TL" => [
			"alpha2"    => "TL",
			"name"      => [
				"ES" => [
					"Timor-Leste",
					"Timor Oriental"
				],
				"EN" => [
					"East timor",
					"Timor-Leste"
				],
				"FR" => "Timor Oriental",
				"PT" => "Timor-Leste",
				"DE" => "Timor-Leste",
				"SW" => "Timor ya Mashariki",
				"IT" => "Timor Est",
				"TR" => "Doğu Timor"
			],
			"continent" => "Asia"
		],
		"TG" => [
			"alpha2"    => "TG",
			"name"      => [
				"ES" => "Togo",
				"EN" => "Togo",
				"FR" => "Togo",
				"PT" => "Togo",
				"DE" => "Togo",
				"SW" => "Togo",
				"IT" => "Togo",
				"TR" => "Togo"
			],
			"continent" => "Africa"
		],
		"TO" => [
			"alpha2"    => "TO",
			"name"      => [
				"ES" => "Tonga",
				"EN" => "Tonga",
				"FR" => "Tonga",
				"PT" => "Tonga",
				"DE" => "Tonga",
				"SW" => "Tonga",
				"IT" => "Tonga",
				"TR" => "Tonga"
			],
			"continent" => "Oceania"
		],
		"TT" => [
			"alpha2"    => "TT",
			"name"      => [
				"ES" => "Trinidad y Tobago",
				"EN" => "Trinidad and Tobago",
				"FR" => "Trinité-et-Tobago",
				"PT" => [
					"Trindade e Tobago",
				    "Trinidad e Tobago"
				],
				"DE" => "Trinidad und Tobago",
				"SW" => "Trinidad na Tobago",
				"IT" => "Trinidad e Tobago",
				"TR" => "Trinidad ve Tobago"
			],
			"continent" => "North America"
		],
		"TN" => [
			"alpha2"    => "TN",
			"name"      => [
				"ES" => "Túnez",
				"EN" => "Tunisia",
				"FR" => "Tunisie",
				"PT" => "Tunísia",
				"DE" => "Tunesien",
				"SW" => "Tunisia",
				"IT" => "Tunisia",
				"TR" => "Tunus"
			],
			"continent" => "Africa"
		],
		"TR" => [
			"alpha2"    => "TR",
			"name"      => [
				"ES" => "Turquía",
				"EN" => "Turkey",
				"FR" => "Turquie",
				"PT" => "Turquia",
				"DE" => "Türkei",
				"SW" => "Uturuki",
				"IT" => "Turchia",
				"TR" => "Türkiye"
			],
			"continent" => "Asia"
		],
		"TM" => [
			"alpha2"    => "TM",
			"name"      => [
				"ES" => "Turkmenistán",
				"EN" => "Turkmenistan",
				"FR" => "Turkménistan",
				"PT" => [
					"Turquemenistão",
					"Turcomenistão",
					"Turquimenistão",
					"Turcoménia",
					"Turcomênia",
					"Turqueménia",
					"Turquemênia"
				],
				"DE" => "Turkmenistan",
				"SW" => "Turkmenistan",
				"IT" => "Turkmenistan",
				"TR" => "Türkmenistan "
			],
			"continent" => "Asia"
		],
		"TV" => [
			"alpha2"    => "TV",
			"name"      => [
				"ES" => "Tuvalu",
				"EN" => "Tuvalu",
				"FR" => "Tuvalu",
				"PT" => "Tuvalu",
				"DE" => "Tuvalu",
				"SW" => "Tuvalu",
				"IT" => "Tuvalu",
				"TR" => "Tuvalu"
			],
			"continent" => "Oceania"
		],
		"UG" => [
			"alpha2"    => "UG",
			"name"      => [
				"ES" => "Uganda",
				"EN" => "Uganda",
				"FR" => "Ouganda",
				"PT" => "Uganda",
				"DE" => "Uganda",
				"SW" => "Uganda",
				"IT" => "Uganda",
				"TR" => "Uganda"
			],
			"continent" => "Africa"
		],
		"UA" => [
			"alpha2"    => "UA",
			"name"      => [
				"ES" => "Ucrania",
				"EN" => "Ukraine",
				"FR" => "Ukraine",
				"PT" => "Ucrânia",
				"DE" => "Ukraine",
				"SW" => "Ukraine",
				"IT" => "Ucraina",
				"TR" => "Ukrayna"
			],
			"continent" => "Europe"
		],
		"AE" => [
			"alpha2"    => "AE",
			"name"      => [
				"ES" => [
					"Emiratos Árabes Unidos",
				    "Emiratos Árabes",
				    "E.A.U.",
				    "EAU"
				],
				"EN" => [
					"United Arab Emirates",
					"U.A.E.",
				    "UAE"
				],
				"FR" => [
					"Émirats arabes unis",
				    "Émirats",
					"É.A.U.",
				    "ÉAU"
				],
				"PT" => [
					"Emirados Árabes Unidos",
					"E.A.U.",
				    "EAU"
				],
				"DE" => [
					"Vereinigte Arabische Emirate",
					"V.A.E.",
				    "VAE"
				],
				"SW" => "Falme za Kiarabu",
				"IT" => [
					"Emirati Arabi Uniti",
					"Emirati Arabi"
				],
				"TR" => [
					"Birleşik Arap Emirlikleri",
					"B.A.E.",
					"BAE"
				]

			],
			"continent" => "Asia"
		],
		"GB" => [
			"alpha2"    => "GB",
			"name"      => [
				"ES" => [
					"Reino Unido",
					"Inglaterra",
					"Gran Bretaña",
					"Gales",
					"Escocia",
					"Irlanda del Norte",
					"Anguila",
					"Bermudas",
					"Islas Caimán",
					"Islas Malvinas",
					"Gibraltar",
					"Montserrat",
					"Islas Pitcairn",
					"Guernsey",
					"Isla de Man",
				],
				"EN" => [
					"United Kingdom",
					"U.K.",
					"UK",
					"England",
					"Britain",
					"Wales",
					"Scotland",
					"Great Britain",
					"Northern Ireland",
					"Anguilla",
					"Bermuda",
					"Cayman Islands",
					"Falkland Islands",
					"Gibraltar",
					"Montserrat",
					"Pitcairn Islands",
					"Guernsey",
					"Isle of Man",
				],
				"FR" => [
					"Royaume-Uni",
					"Grande-Bretagne",
					"Angleterre",
					"Écosse",
					"Galles",
					"Irlande du Nord",
					"Grande-Bretagne",
					"Anguilla",
					"Bermudes",
					"Îles Caïmans",
					"Malouines",
					"Gibraltar",
					"Montserrat",
					"Îles Pitcairn",
					"Guernesey",
					"Île de Man",
				],
				"PT" => [
					"Reino Unido",
					"Inglaterra",
					"Gales",
					"Escócia",
					"Grã-Bretanha",
					"Irlanda do Norte",
					"Anguilla",
					"Bermudas",
					"Ilhas Cayman",
					"Ilhas Falkland",
					"Gibraltar",
					"Montserrat",
					"Ilhas Pitcairn",
					"Guernsey",
					"Ilha de Man",
				],
				"DE" => [
					"Vereinigtes Königreich",
					"England",
					"Wales",
					"Schottland",
					"Nordirland",
					"Great Britain",
					"Anguilla",
					"Bermuda",
					"Cayman Islands",
					"Kaimaninseln",
					"Falklandinseln",
					"Malwinen",
					"Gibraltar",
					"Montserrat",
					"Pitcairninseln",
					"Guernsey",
					"Isle of Man",
				    "Insel Man",
				],
				"SW" => [
					"Ufalme wa Muungano",
					"Uingereza",
					"Welisi",
					"Uskoti",
					"Eire ya Kaskazini",
					"Britania",
					"Anguilla",
					"Bermuda",
					"Visiwa vya Cayman",
					"Visiwa vya Falkland",
					"Gibraltar",
					"Montserrat",
					"Pitcairn",
					"Guernsey",
					"Kisiwa cha Man",
				],
				"IT" => [
					"Regno Unito",
					"Gran Bretagna",
					"Inghilterra",
					"Galles",
					"Scozia",
					"Irlanda del Nord",
					"Anguilla",
					"Bermuda",
					"Isole Cayman",
					"Isole Falkland",
					"Iosle Malvine",
					"Gibilterra",
					"Montserrat",
					"Isole Pitcairn",
					"Guernsey",
					"Isola di Man",
				],
				"TR" => [
					"Birleşik Krallık",
					"İngiltere",
					"Galler",
					"İskoçya",
					"Kuzey İrlanda",
					"Büyük Britanya",
					"Anguilla",
					"Bermuda",
					"Cayman Adaları",
					"Falkland Adaları",
					"Cebelitarık",
					"Montserrat",
					"Pitcairn Adaları",
					"Guernsey",
					"Man Adası",
				]
			],
			"continent" => "Europe"
		],
		"US" => [
			"alpha2"    => "US",
			"name"      => [
				"ES" => [
					"Estados Unidos",
					"EE UU",
					"EEUU",
					"EE.UU.",
					"Puerto Rico",
					"Islas Marianas del Norte",
					"Guam",
					"Samoa Americana"
				],
				"EN" => [
					"United States",
					"U.S.",
					"U.S.A.",
					"USA",
					"United States of America",
					"the US",
					// Written like this as without the article the simple "us" (we) would be a false positive.
					"Puerto Rico",
					"Northern Mariana Islands",
					"Guam",
					"American Samoa"
				],
				"FR" => [
					"États-Unis d'Amérique",
					"États-Unis",
					"USA",
					"Porto Rico",
				    "Îles Mariannes du Nord",
				    "Guam",
				    "Samoa américaines"
				],
				"PT" => [
					"Estados Unidos da América",
					"Estados Unidos",
					"USA",
					"Porto Rico",
					"Marianas Setentrionais",
					"Guam",
					"Guão",
					"Guame",
					"Samoa Americana"
				],
				"DE" => [
					"Vereinigte Staaten von Amerika",
					"Vereinigte Staaten",
					"USA",
					"Puerto Rico",
					"Portoriko",
				    "Nördliche Marianen",
				    "Guam",
				    "Amerikanisch-Samoa"
				],
				"SW" => [
					"Muungano wa Madola ya Amerika",
					"Marekani",
					"Puerto Rico",
					"USA",
				    "Visiwa vya Mariana ya Kaskazini",
				    "Guam",
				    "Samoa ya Marekani"
				],
				"IT" => [
					"Stati Uniti d'America",
					"Stati Uniti",
					"USA",
					"Puerto Rico",
				    "Isole Marianne Settentrionali",
				    "Guam",
				    "Samoa Americane"
				],
				"TR" => [
					"Amerika Birleşik Devletleri",
					"Birleşik Devletler",
					"ABD",
					"Porto Riko",
				    "Kuzey Mariana Adaları",
				    "Guam",
				    "Amerikan Samoası"
				]
			],
			"continent" => "North America"
		],
		"UY" => [
			"alpha2"    => "UY",
			"name"      => [
				"ES" => "Uruguay",
				"EN" => "Uruguay",
				"FR" => "Uruguay",
				"PT" => "Uruguai",
				"DE" => "Uruguay",
				"SW" => "Uruguay",
				"IT" => "Uruguay",
				"TR" => "Uruguay"
			],
			"continent" => "South America"
		],
		"UZ" => [
			"alpha2"    => "UZ",
			"name"      => [
				"ES" => "Uzbekistán",
				"EN" => "Uzbekistan",
				"FR" => "Ouzbékistan",
				"PT" => [
					"Uzbequistão",
					"Usbequistão"
				],
				"DE" => "Usbekistan",
				"SW" => "Uzbekistan",
				"IT" => "Uzbekistan",
				"TR" => "Özbekistan"
			],
			"continent" => "Asia"
		],
		"VU" => [
			"alpha2"    => "VU",
			"name"      => [
				"ES" => "Vanuatu",
				"EN" => "Vanuatu",
				"FR" => "Vanuatu",
				"PT" => "Vanuatu",
				"DE" => "Vanuatu",
				"SW" => "Vanuatu",
				"IT" => "Vanuatu",
				"TR" => "Vanuatu"
			],
			"continent" => "Oceania"
		],
		"VE" => [
			"alpha2"    => "VE",
			"name"      => [
				"ES" => "Venezuela",
				"EN" => "Venezuela",
				"FR" => "Venezuela",
				"PT" => "Venezuela",
				"DE" => "Venezuela",
				"SW" => "Venezuela",
				"IT" => "Venezuela",
				"TR" => "Venezuela"
			],
			"continent" => "South America"
		],
		"VN" => [
			"alpha2"    => "VN",
			"name"      => [
				"ES" => "Vietnam",
				"EN" => "Vietnam",
				"FR" => [
					"Viêt Nam",
				    "Viet Nam",
				    "Vietnam"
				],
				"PT" => [
					"Vietnam",
					"Vietnã",
				    "Vietname"
				],
				"DE" => "Vietnam",
				"SW" => "Vietnam",
				"IT" => "Vietnam",
				"TR" => "Vietnam"
			],
			"continent" => "Asia"
		],
		"XK" => [
			"alpha2"    => "XK",
			"name"      => [
				"ES" => "Kosovo",
				"EN" => "Kosovo",
				"FR" => "Kosovo",
				"PT" => "Kosovo",
				"DE" => "Kosovo",
				"SW" => "Kosovo",
				"IT" => "Kosovo",
				"TR" => "Kosova"
			],
			"continent" => "Europe"
		],
		"YE" => [
			"alpha2"    => "YE",
			"name"      => [
				"ES" => "Yemen",
				"EN" => "Yemen",
				"FR" => "Yémen",
				"PT" => [
					"Iémen",
				    "Iêmen"
				],
				"DE" => "Jemen",
				"SW" => "Yemen",
				"IT" => "Yemen",
				"TR" => "Yemen"
			],
			"continent" => "Asia"
		],
		"ZM" => [
			"alpha2"    => "ZM",
			"name"      => [
				"ES" => "Zambia",
				"EN" => "Zambia",
				"FR" => "Zambie",
				"PT" => "Zâmbia",
				"DE" => "Sambia",
				"SW" => "Zambia",
				"IT" => "Zambia",
				"TR" => "Zambiya"
			],
			"continent" => "Africa"
		],
		"ZW" => [
			"alpha2"    => "ZW",
			"name"      => [
				"ES" => "Zimbabwe",
				"EN" => "Zimbabwe",
				"FR" => "Zimbabwe",
				"PT" => [
					"Zimbabue",
				    "Zimbábue",
				    "Zimbabué",
				    "Zimbabwe"
				],
				"DE" => "Simbabwe",
				"SW" => "Zimbabwe",
				"IT" => "Zimbabwe",
				"TR" => "Zimbabve"
			],
			"continent" => "Africa"
		]
	];


	/*
	 * function get()
	 * @param $key - key field for the array of countries, set it to null if you want array without named indices
	 * @param $requestedField - name of the field to be fetched in value part of array
	 * @returns array contained key=>value pairs of the requested key and field
	 *
	 */
	public static function get($keyField = "alpha2", $requestedField = "name")
	{
		$supportedFields = ["alpha2", "name"];
		//check if field to be used as array key is passed
		if (!in_array($keyField, $supportedFields))
		{
			$keyField = null;
		}

		//check if the $requestedField is supported or not
		if (!in_array($requestedField, $supportedFields))
		{
			$requestedField = "name"; //return country name if invalid/unsupported field name is request
		}

		$result = [];
		//copy each requested field from the countries array
		foreach (self::$countries as $k => $country)
		{
			if ($keyField)
			{
				$result[$country[$keyField]] = $country[$requestedField];
			}
			else
			{
				$result[] = $country[$requestedField];
			}
		}

		return $result;
	}


	/*
	 * function get2d() returns 2d array of countries
	 * @param $key - key field for the array of countries, set it to null if you want array without named indices
	 * @param $requestedFields - array of name of the fields to be fetched in value part of array
	 * @returns array contained key=>value pairs of the requested key and field
	 *
	 */
	public static function get2d(
		$keyField = "alpha2",
		$requestedFields = ["alpha2", "name"/*, "continent"*/]
	) {
		$supportedFields = ["alpha2", "name"/*, "continent"*/];
		//check if field to be used as array key is passed
		if (!in_array($keyField, $supportedFields))
		{
			$keyField = null;
		}

		//check if the $fields is an array or not
		if (is_array($requestedFields))
		{
			//check if each field requested is supported or not, else unset it
			foreach ($requestedFields as $index => $field)
			{
				if (!in_array($field, $supportedFields))
				{
					unset($requestedFields[$index]);
				}
			}
		}
		else
		{
			$requestedFields = [];
		}
		$result = [];
		//copy each requested field from the countries array
		foreach (self::$countries as $k => $country)
		{
			$tmp = [];
			foreach ($requestedFields as $field)
			{
				$tmp[$field] = $country[$field];
			}
			if ($keyField)
			{
				$result[$country[$keyField]] = $tmp;
			}
			else
			{
				$result[] = $tmp;
			}
		}

		return $result;
	}

	/*
	* function getFromContinent()
	* @param $key - key field for the array of countries, set it to null if you want array without named indices
	* @param $requestedField - name of the field to be fetched in value part of array
	* @param $continent - name of continent to use as filter
	* @returns array contained key=>value pairs of the requested key and field
	* Works exactly as get() above
	* But takes an extra param to enable filtering by continent
	*
	*/
	public static function getFromContinent($keyField = "alpha2", $requestedField = "name", $continent = null)
	{
		$supportedFields = ["alpha2", "name", "continent"];
		$supportedContinents = ["Africa", "Antarctica", "Asia", "Europe", "North America", "Oceania", "South America"];

		//check if field to be used as array key is passed
		if (!in_array($keyField, $supportedFields))
		{
			$keyField = null;
		}

		//check if field to be used as continent is passed
		if (!in_array($continent, $supportedContinents))
		{
			$continent = null;
		}

		//check if the $requestedField is supported or not
		if (!in_array($requestedField, $supportedFields))
		{
			$requestedField = "name"; //return country name if invalid/unsupported field name is request
		}

		$result = [];
		//copy each requested field from the countries array
		foreach (self::$countries as $k => $country)
		{
			if ($keyField)
			{
				if ($continent)
				{
					if ($country["continent"] == $continent)
					{
						$result[$country[$keyField]] = $country[$requestedField];
					}
				}
				else
				{
					$result[$country[$keyField]] = $country[$requestedField];
				}
			}
			else
			{
				if ($continent)
				{
					if ($country["continent"] == $continent)
					{
						$result[] = $country[$requestedField];
					}
				}
				else
				{
					$result[] = $country[$requestedField];
				}
			}
		}

		return $result;
	}

	public static function getKeys()
	{
		return array_keys(self::$countries);
	}
}