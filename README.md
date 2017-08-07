![logo](https://raw.githubusercontent.com/HHErebus/gaze-of-the-world/master/public/img/logo.png)
# Gaze of the World
_Visual trends in news about nations_

### “Where is the world looking?”
I’ve been wondering about that question a lot, lately. The amount of news in my (and everybody else’s) daily life is staggering, especially if you make an effort to stay up-to-date with news in more than one place (I’m Italian and I like to know what goes on in my home country, even if I live abroad) and try do to so from a variety of sources of differing political inclinations. I wish the 24-hours news cycle didn’t exist, but it does, and we are left to deal with it.

After a particularly high-density Thursday it became clear I couldn't spend hours every day just reading the news, so I optimized. For that reason I created Gaze of the World, a very simple web app that does what it says on the tin – it tells you which country is the focus of the world’s “gaze”, based on the mean daily volume of news about that country, and how much a particular day deviated from that mean.

### How
Backend-wise, I started developing in vanilla PHP as an experiment, but switched halfway through to [Laravel](https://laravel.com/) to learn about the framework. This is normally considered a very bad practice, and I understand why; there are however no stakes in this projects aside from learning, and that switch is possibly the most successful experiment in my dev life as I discovered in Laravel an incredibly straightforward and flexible framework.

On the frontend, you have the usual suspect of [jQuery](https://jquery.com/), coupled with [Bootstrap4](https://v4-alpha.getbootstrap.com/) and [HighCharts](https://www.highcharts.com/). Nothing much to say there, the app is intentionally plain and focused on the data.

### What Gaze of the World begat
Quite a lot! Especially headache-wise :D

I learned firsthand about common pitfalls in code architecture and maintaining a codebase – Gaze of the World is where I had my first encounters with MVC questions like is this actually part of that controller or should I create a new one? Am I adding undue complexity to this? Is that thing actually a model?, or design-oriented questions about layout and responsiveness, and the evergreen Where in the Bahamas does that npm error come from? Y’know, the daily struggles of web development :)

It also spawned a Twitter bot, which you can find at [@gazeoftheworld](https://twitter.com/gazeoftheworld).