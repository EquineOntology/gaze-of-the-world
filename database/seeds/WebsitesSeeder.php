<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WebsitesSeeder extends Seeder {

	private $feeds = [
		'nytimes.com'           => [
			'https://rss.nytimes.com/services/xml/rss/nyt/World.xml',
			'US'
		],
		'theguardian.com'       => [
			'https://www.theguardian.com/world/rss',
			'GB'
		],
		'cnn.com'               => ['https://rss.cnn.com/rss/edition_world.rss'],
		'bbc.co.uk'             => [
			'https://feeds.bbci.co.uk/news/world/rss.xml?edition=uk',
			'GB'
		],
		'huffingtonpost.com'    => ['https://www.huffingtonpost.com/feeds/verticals/world/index.xml'],
		'foxnews.com'           => [
			'http://feeds.foxnews.com/foxnews/world',
			'US'
		],
		'indiatimes.com'        => ['http://timesofindia.indiatimes.com/rssfeeds/296589292.cms'],
		'wsj.com'               => [
			'http://www.wsj.com/xml/rss/3_7085.xml',
			'US'
		],
		'reuters.com'           => ['http://feeds.reuters.com/Reuters/worldNews'],
		'indianexpress.com'     => [
			'http://indianexpress.com/section/world/feed/',
			'IN'
		],
		'time.com'              => ['https://feeds2.feedburner.com/time/world'],
		'latimes.com'           => [
			'http://www.latimes.com/world/rss2.0.xml',
			'US'
		],
		'cnbc.com'              => ['http://www.cnbc.com/id/100727362/device/rss/rss.html'],
		'abcnews.go.com'        => ['http://feeds.abcnews.com/abcnews/internationalheadlines'],
		'cbsnews.com'           => ['http://www.cbsnews.com/latest/rss/world'],
		'dw.com'                => ['http://rss.dw.com/rdf/rss-en-world'],
		'news.com.au'           => [
			'http://www.news.com.au/world/rss',
			'AU'
		],
		'theatlantic.com'       => ['https://www.theatlantic.com/feed/channel/international/'],
		'cbc.ca'                => [
			'http://www.cbc.ca/cmlink/rss-world',
		    'CA',
			'EN'
		],
		'chinadaily.com.cn'     => ['http://www.chinadaily.com.cn/rss/world_rss.xml'],
		'thehill.com'           => ['http://thehill.com/taxonomy/term/43/feed'],
		'hindustantimes.com'    => ['http://www.hindustantimes.com/rss/world/rssfeed.xml'],
		'smh.com.au'            => ['http://www.smh.com.au/rssheadlines/nsw/article/rss.xml'],
		'aljazeera.com'         => ['http://www.aljazeera.com/xml/rss/all.xml'],
		'economist.com'         => ['http://www.economist.com/sections/international/rss.xml'],
		'ap.org'                => ['http://hosted.ap.org/lineups/WORLDHEADS.rss?SITE=AP&SECTION=HOME'],
		'dailycaller.com'       => ['https://feeds.feedburner.com/dailycaller-world'],
		'theglobeandmail.com'   => ['http://www.theglobeandmail.com/news/world/?service=rss'],
		'france24.com'          => ['http://www.france24.com/en/top-stories/rss'],
		'theage.com.au'         => ['http://www.theage.com.au/rssheadlines/world/article/rss.xml'],
		'business-standard.com' => ['http://www.business-standard.com/rss/international-116.rss'],
		'washingtontimes.com'   => ['http://www.washingtontimes.com/rss/headlines/news/world/'],
		'thestar.com'           => ['https://www.thestar.com/feeds.articles.news.world.rss'],
		'ctvnews.ca'            => ['http://www.ctvnews.ca/rss/ctvnews-ca-world-public-rss-1.822289'],
		'phylly.com'            => [
			'http://www.philly.com/philly_news_nation.rss',
			'US'
		],
		'financialexpress.com'  => ['http://www.financialexpress.com/market/world-markets/feed/'],
		'seattletimes.com'      => [
			'http://www.seattletimes.com/world/feed/',
			'US'
		],
		'commondreams.org'      => ['https://www.commondreams.org/rss.xml'],
		'militarytimes.com'     => ['https://feeds.feedburner.com/rss/category/mil-home?format=xml'],
		'rappler.com'           => [
			'https://feeds.feedburner.com/rappler/'
		],
		'canoe.com'             => [
			'http://tu9srvbirvvtosryc3muy2fub2uuy29t.g00.canoe.com/g00/2_d3d3LmNhbm9lLmNvbQ%3D%3D_/TU9SRVBIRVVTOSRodHRwOi8vcnNzLmNhbm9lLmNvbS9DTkVXUy9Xb3JsZC9ob21lLnhtbA%3D%3D_$/$/$/$',
			'CA'
		],
		'radioaustralia.net.au' => [
			'http://www.radioaustralia.net.au/international/feeds/news/topstories',
			'AU'
		],
		'un.org'                => ['https://www.un.org/apps/news/rss/rss_top.asp'],
		'jpost.com'             => [
			'http://www.jpost.com/Rss/RssFeedsPolitiqueetsocial.aspx',
			'IL'
		],
		'bignewsnetwork.com'    => ['http://feeds.bignewsnetwork.com/category/c08dd24cec417021'],
		'news.google.com'       => ['https://news.google.com/news/section?cf=all&pz=1&ned=us&topic=w&siidp=a892d2018e82a999047693ed29f8258ca06a&ict=ln&output=rss'],

	    // French
		'lemonde.fr' => [
			'http://www.lemonde.fr/international/rss_full.xml',
			'FR',
			'FR'
		],
		'lefigaro.fr' => [
			'http://www.lefigaro.fr/rss/figaro_international.xml',
			'FR',
			'FR'
		],
		'rfi.fr' => [
			'http://www.rfi.fr/general/rss',
			'',
			'FR'
		],


	    // German
		'welt.de' => [
			'https://www.welt.de/feeds/latest.rss',
			'DE',
			'DE'
		],
		'spiegel.de' => [
			'http://www.spiegel.de/schlagzeilen/tops/index.rss',
			'DE',
			'DE'
		],
	    'orf.at' => [
	    	'http://rss.orf.at/news.xml',
	        'AT',
	        'DE'
	    ],
		'derstandard.at' => [
			'https://derstandard.at/?page=rss&ressort=seite1',
			'AT',
			'DE'
		],

		// Italian
		'repubblica.it' => [
			'http://www.repubblica.it/rss/esteri/rss2.0.xml?ref=RHFT',
			'IT',
			'IT'
		],
		'corriere.it'   => [
			'http://xml.corriereobjects.it/rss/esteri.xml',
			'IT',
			'IT'
		],
		'ansa.it'       => [
			'http://www.ansa.it/sito/notizie/mondo/mondo_rss.xml',
			'IT',
			'IT'
		],

	    // Portuguese
	    'globo.com' => [
	        'http://g1.globo.com/dynamo/mundo/rss2.xml',
	        'BR',
	        'PT'
	    ],
		'folha.uol.com.br' => [
			'http://feeds.folha.uol.com.br/mundo/rss091.xml',
			'BR',
			'PT'
		],

		// Spanish
		'elpais.com'          => [
			'https://ep00.epimg.net/rss/internacional/portada.xml',
			'ES',
			'ES'
		],
		'elmundo.es'          => [
			'http://estaticos.elmundo.es/elmundo/rss/internacional.xml',
			'ES',
			'ES'
		],
		'elconfidencial.com'  => [
			'http://rss.elconfidencial.com/mundo/',
			'ES',
			'ES'
		],
		'abc.es'              => [
			'http://www.abc.es/rss/feeds/abc_Internacional.xml',
			'',
			'ES'
		],
		'lavanguardia.com'    => [
			'http://www.lavanguardia.com/mvc/feed/rss/internacional',
			'ES',
			'ES'
		],
		'20minutos.es'        => [
			'http://www.20minutos.es/rss/internacional/',
			'',
			'ES'
		],
		'clarin.com'          => [
			'https://www.clarin.com/rss/mundo/',
			'AR',
			'ES'
		],
		'elintransigente.com' => [
			'http://www.elintransigente.com/rss/feed.html?r=527',
			'AR',
			'ES'
		],
		'lanacion.com.ar'     => [
			'http://contenidos.lanacion.com.ar/herramientas/rss-categoria_id=7',
			'AR',
			'ES'
		],
		'lanacion.com.ar'     => [
			'http://tn.com.ar/feed/internacional',
			'AR',
			'ES'
		],

	    // Turkish
		'sabah.com.tr' => [
			'http://www.sabah.com.tr/rss/dunya.xml',
			'TR',
			'TR'
		],
		'onedio.com' => [
			'https://onedio.com/support/rss.xml?category=4fa8fda4ed765b1122000011',
			'TR',
			'TR'
		],
		'milliyet.com.tr' => [
			'http://www.milliyet.com.tr/rss/rssNew/dunyaRss.xml',
			'TR',
			'TR'
		],
		'yenisafak.com' => [
			'http://www.yenisafak.com/rss?xml=dunya',
			'TR',
			'TR'
		],
		'hurriyet.com.tr' => [
			'http://www.hurriyet.com.tr/rss/dunya',
			'TR',
			'TR'
		],
	];
	private $blacklist = [
		'reddit.com'             => '',
		// Not news.
		'shutterstock.com'       => '',
		// Not news.
		'weather.com'            => '',
		// Not news.
		'google.com'             => '',
		// Not news.
		'yahoo.com'              => '',
		// Not news.
		'accuweather.com'        => '',
		// Not news.
		'weather.gov'            => '',
		// Not news.
		'topix.com'              => '',
		// Not news.
		'forbes.com'             => '',
		// No feeds.
		'bloomberg.com'          => '',
		// No feeds.
		'usatoday.com'           => '',
		// Feeds don't work.
		'drudgereport.com'       => '',
		// No "world" feed.
		'wunderground.com'       => '',
		// No feeds.
		'nbcnews.com'            => '',
		// Feeds don't work.
		'chron.com'              => '',
		// No "world" feed.
		'nypost.com'             => '',
		// No "world" feed.
		'thehindu.com'           => '',
		// No feeds.
		'nationalgeographic.com' => '',
		// Not news.
		'eenadu.net'             => '',
		// Not in English, can't be parsed currently.
		'usnews.com'             => '',
		// No "world" feed.
		'sfgate.com'             => '',
		// No "world" feed.
		'thedailybeast.com'      => '',
		// No feeds.
		'alarabiya.net'          => '',
		// No "world" feed.
		'manoramaonline.com'     => '',
		// Non-English version can't be parsed currently (and English version doesn't have RSS).
		'chicagotribune.com'     => '',
		// No feeds.
		'yr.no'                  => '',
		// Not news.
		'hollywoodreporter.com'  => '',
		// "International" feed doesn't work.
		'newsnow.co.uk'          => '',
		// Doesn't offer free feeds.
		'bankrate.com'           => '',
		// Not news.
		'yonhapnews.co.kr'       => '',
		// No "world" feed.
		'voanews.com'            => '',
		// No "world" feed.
		'fortune.com'            => '',
		// No feeds.
		'variety.com'            => '',
		// No "world" feed.
		'mathrubhumi.com'        => '',
		// No "world" feed.
		'inquisitr.com'          => '',
		// No "world" feed.
		'newsmax.com'            => '',
		// No feeds.
		'euronews.com'           => '',
		// No "world" feed.
		'nj.com'                 => '',
		// No "world" feed.
		'globaltimes.cn'         => '',
		// No feeds.
		'intellicast.com'        => '',
		// Not news.
		'irna.ir'                => '',
		// No "world" feed.
		'adweek.com'             => '',
		// No "world" feed.
		'zougla.gr'              => '',
		// No "world" feed.
		'bostonglobe.com'        => '',
		// No feeds.
		'dnaindia.com'           => '',
		// No feeds.
		'purdue.edu'             => '',
		// No "world" feed.
		'bdnews24.com'           => '',
		// No feeds.
		'prnewswire.com'         => '',
		// No "world" feed.
		'livemint.com'           => '',
		// No "world" feed.
		'theonion.com'           => '',
		// Luckily (or sadly, depending), not news.
		'metafilter.com'         => '',
		// No "world" feed.
		'foxbusiness.com'        => '',
		// "World" feed already included.
		'beforeitsnews.com'      => '',
		// Doesn't offer non-subscriber feeds.
		'metoffice.gov.uk'       => '',
		// Not news.
		'newsweek.com'           => '',
		// No feed.
		'alternet.org'           => '',
		// No "world" feed.
		'deccanchronicle.com'    => '',
		// No "world" feed.
		'washingtonexaminer.com' => '',
		// No "world" feed.
		'fark.com'               => '',
		// Not news.
		'al.com'                 => '',
		// No feeds.
		'dailycaller.com'        => '',
		// No feeds.
		'newswise.com'           => 'US',
		// No feeds.
		'firsttoknow.com'        => '',
		// No feeds.
		'citizendaily.news'      => '',
		// No feeds.
		'namnewsnetwork.org'     => '',
		// No feeds.
		'thetimes.co.uk'         => 'GB',
		// They killed their RSS.
		'blastingnews.com'       => '',
		// No feeds.
		'20minutes.fr'           => ['FR', 'FR'],
	    // No feeds.
		'ilfattoquotidiano.it'   => ['IT', 'IT'],
	    // No "World" feed.
	    'dagospia.com'           => ['IT', 'IT'],
	    // No feeds.
	    'caffeinamagazine.it'    => ['IT', 'IT'],
	    // No feeds.
	    'focus.de'               => ['DE', 'DE'],
	    // No "World" feed.
	    'bild.de'                => ['DE', 'DE'],
	    // No "World" feed.
	    'krone.at'               => ['AT', 'DE'],
	    // No feeds.
	    'infobae.com'            => '',
	    // No "World" feed.
		'lagaceta.com.ar'        => ['AR', 'ES'],
		// No feeds.
		'metropoles.com'         => ['BR', 'PT'],
		// No "World" feed.
	    'afrikmag.com'           => ['', 'FR'],
		// No feeds.
	    'igihe.com'              => '',
		// No feeds.
		'igihe.bi'               => '',
		// No feeds.
		'iwacu-burundi.org'      => '',
		// No "World" feed.
	    'bujumburanewsblog.wordpress.com' => '',
		// No "World" feed.
		'bujumbura.be'           => '',
		// No "World" feed.
	    'mediacongo.net'         => ['', 'FR'],
	    // No feeds.
		'radiookapi.net'         => ['', 'FR'],
		// No "World" feed.
		'newvision.co.ug'        => ['UG', 'EN'],
		// Feed behind authentication.
		'monitor.co.ug'          => ['UG', 'EN'],
		// RSS dead.
		'dailymail.co.uk'        => ['GB', 'EN'],
		// World feed dead.
		'howwe.biz'              => ['', 'EN'],
		// No "World" feed.
		'redpepper.co.ug'        => ['UG', 'EN'],
		// No feeds.
		'sap.mz'                 => ['MZ', 'PT'],
		// No feeds.
		'publico.pt' => ['PT', 'PT'],
		// No "World" feed.
		'jn.pt' => ['PT', 'PT'],
		// "World" feed broken.
		'ensonhaber.com' => ['TR', 'TR'],
		// Feeds broken.
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach ($this->feeds as $name => $attributes)
		{
			DB::table('websites')
				->insert([
					         'name'       => $name,
					         'feedUrl'    => $attributes[0],
					         'country'    => isset($attributes[1]) ? $attributes[1] : null,
					         'language'   => isset($attributes[2]) ? $attributes[2] : null,
					         'usable'     => true,
					         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
					         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
				         ]);
		}

		foreach ($this->blacklist as $name => $attributes)
		{
			DB::table('websites')
				->insert([
					         'name'       => $name,
					         'feedUrl'    => '',
					         'country'    => isset($attributes[1]) ? $attributes[1] : null,
					         'language'   => isset($attributes[2]) ? $attributes[2] : null,
					         'usable'     => false,
					         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
					         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
				         ]);
		}
	}
}
