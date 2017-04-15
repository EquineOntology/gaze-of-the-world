<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WebsitesSeeder extends Seeder {

	private $feeds = [
		'nytimes.com'           => ['https://rss.nytimes.com/services/xml/rss/nyt/World.xml'],
		'theguardian.com'       => ['https://www.theguardian.com/world/rss'],
		'cnn.com'               => ['https://rss.cnn.com/rss/edition_world.rss'],
		'bbc.co.uk'             => ['https://feeds.bbci.co.uk/news/world/rss.xml?edition=uk'],
		'huffingtonpost.com'    => ['https://www.huffingtonpost.com/feeds/verticals/world/index.xml'],
		'foxnews.com'           => ['http://feeds.foxnews.com/foxnews/world'],
		'indiatimes.com'        => ['http://timesofindia.indiatimes.com/rssfeeds/296589292.cms'],
		'wsj.com'               => ['http://www.wsj.com/xml/rss/3_7085.xml'],
		'reuters.com'           => ['http://feeds.reuters.com/Reuters/worldNews'],
		'indianexpress.com'     => ['http://indianexpress.com/section/world/feed/'],
		'time.com'              => ['https://feeds2.feedburner.com/time/world'],
		'latimes.com'           => ['http://www.latimes.com/world/rss2.0.xml'],
		'cnbc.com'              => ['http://www.cnbc.com/id/100727362/device/rss/rss.html'],
		'abcnews.go.com'        => ['http://feeds.abcnews.com/abcnews/internationalheadlines'],
		'cbsnews.com'           => ['http://www.cbsnews.com/latest/rss/world'],
		'dw.com'                => ['http://rss.dw.com/rdf/rss-en-world'],
		'news.com.au'           => ['http://www.news.com.au/world/rss'],
		'theatlantic.com'       => ['https://www.theatlantic.com/feed/channel/international/'],
		'cbc.ca'                => ['http://www.cbc.ca/cmlink/rss-world'],
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
		'phylly.com'            => ['http://www.philly.com/philly_news_nation.rss'],
		'financialexpress.com'  => ['http://www.financialexpress.com/market/world-markets/feed/'],
		'seattletimes.com'      => ['http://www.seattletimes.com/world/feed/'],
		'thetimes.co.uk'        => ['http://www.thetimes.co.uk/#section-news'],
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
		'bignewsnetwork.com'    => ['http://feeds.bignewsnetwork.com/category/c08dd24cec417021']
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
		'namnewsnetwork.org'     => ''
		// No feeds.

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
					         'usable'     => true,
					         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
					         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
				         ]);
		}

		foreach ($this->blacklist as $name => $country)
		{
			DB::table('websites')
				->insert([
					         'name'       => $name,
					         'feedUrl'    => '',
					         'country'    => $country,
					         'usable'     => false,
					         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
					         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
				         ]);
		}
	}
}
