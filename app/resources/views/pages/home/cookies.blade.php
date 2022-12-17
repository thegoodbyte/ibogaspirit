@extends('layouts.default')

@section('content')


    @include('pages.home.slider')

    <div class="geoapify-page">
        <h1>Cookie policy</h1>
        <p>This Cookie Policy explains what cookies are and how we use them. You should read this policy to understand
            what cookies are, how we use them, the types of cookies we use i.e, the information we collect using cookies
            and how that information is used and how to control the cookie preferences. For further information on how
            we use, store, and keep your personal data secure, see our <a href="/privacy-policy/">Privacy Policy</a>.
        </p>
        <p>Your consent applies to the following domains and subdomains:
            <a href="https://www.geoapify.com" target="_blank" rel="nofollow">geoapify.com</a>,
            <a href="https://mapifator.com/" target="_blank" rel="nofollow">mapifator.com</a>,
            <a href="https://commutetimemap.com/map" target="_blank" rel="nofollow">commutetimemap.com</a>.</p>
        <h3>What are cookies ?</h3>
        <p>Cookies are small text files that are used to store small pieces of information. The cookies are stored on
            your device when the website is loaded on your browser. These cookies help us make the website function
            properly, make the website more secure, provide better user experience, and understand how the website
            performs and to analyze what works and where it needs improvement.</p>
        <h3>How do we use cookies ?</h3>
        <p>As most of the online services, our website uses cookies first-party and third-party cookies for a number
            of purposes. First-party cookies are mostly necessary for the website to function the right way,
            and they do not collect any of your personally identifiable data.</p>
        <p>The third-party cookies used on our websites are used mainly for understanding how the website performs,
            how you interact with our website, keeping our services secure, providing advertisements that are relevant
            to you, and all in all providing you with a better and improved user experience and help speed up your
            future interactions with our website.</p>
        <h3>What types of cookies do we use?</h3>
        <p><strong>Essential</strong>: Some cookies are essential for you to be able to experience the full
            functionality of our site. They allow us to maintain user sessions and prevent any security threats. They do
            not collect or store any personal information. For example, these cookies allow you to log-in to your account
            and add products to your basket and checkout securely.</p>
        <p><strong>Statistics:</strong> These cookies store information like the number of visitors to the website, the
            number of unique visitors, which pages of the website have been visited, the source of the visit etc. These
            data help us understand and analyze how well the website performs and where it needs improvement.</p>
        <p><strong>Marketing:</strong> Our website displays advertisements. These cookies are used to personalize the
            advertisements that we show to you so that they are meaningful to you. These cookies also help us keep
            track of the efficiency of these ad campaigns.</p>
        <p>The information stored in these cookies may also be used by the third-party ad providers to show you ads
            on other websites on the browser as well.</p>
        <p><strong>Functional:</strong> These are the cookies that help certain non-essential functionalities on our
            website. These functionalities include embedding content like videos or sharing contents on the website on
            social media platforms.</p>
        <p><strong>Preferences:</strong> These cookies help us store your settings and browsing preferences like
            language preferences so that you have a better and efficient experience on future visits to the website.
        </p>
        <div class="width-default">
            <table>
                <thead>
                <tr>
                    <th>COOKIE</th>
                    <th>TYPE</th>
                    <th>DURATION</th>
                    <th>DESCRIPTION</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>__cfduid</td>
                    <td>Essential</td>
                    <td>1 month</td>
                    <td>The cookie is set by CloudFare.The cookie is used to identify individual clients behind a shared IP address and apply security settings on a per-client basis. It does not correspond to any user ID in the web application and does not store any personally identifiable information.</td>
                </tr>
                <tr>
                    <td>_ga</td>
                    <td>Analytics</td>
                    <td>2 years</td>
                    <td>This cookie is installed by Google Analytics. The cookie is used to calculate visitors, session, campaign data, and keep track of site usage for the site's analytics report. The cookies store information anonymously and assign a randomly generated number to identify unique visitors.</td>
                </tr>
                <tr>
                    <td>_gat_UA-140032323-1</td>
                    <td>Performance</td>
                    <td>1 minute</td>
                    <td>This is a pattern type cookie set by Google Analytics, where the pattern element on the name contains the unique identity number of the account or website it relates to. It appears to be a variation of the _gat cookie which is used to limit the amount of data recorded by Google on high traffic volume websites.</td>
                </tr>
                <tr>
                    <td>_gcl_au</td>
                    <td>Analytics</td>
                    <td>2 months</td>
                    <td>This cookie is used by Google Analytics to understand user interaction with the website.</td>
                </tr>
                <tr>
                    <td>_gid</td>
                    <td>Analytics</td>
                    <td>1 day</td>
                    <td>This cookie is installed by Google Analytics. The cookie is used to store information on how visitors use a website and helps in creating an analytics report of how the website is doing. The data collected including the number visitors, the source where they have come from, and the pages visited in an anonymous form.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <p>We use Zoho Sales IQ module and Zoho chat widget, that can set <a href="https://www.zoho.com/salesiq/cookies-policy.html" target="_blank" rel="nofollow">additinal cookies</a>.
            Additional cookies can be set by Cookie Consent to store user preferences.
        </p>
        <h3>How can I control the cookie preferences ?</h3>
        <p>Should you decide to change your preferences later through your browsing session, you can click on the "Manage your consent". This will display the consent notice again enabling you to change your preferences or withdraw your consent entirely:</p>
        <div class="text-center my-5"><button type="button" class="
          py-3 px-8
          bg-red-500
          hover:bg-red-500-darker
          rounded
          text-white
          ">Manage cookies consent</button></div>
        <p>In addition to this, different browsers provide different methods to block and delete cookies used by websites. You can change the settings of your browser to block/delete the cookies. To find out more about how to manage and delete cookies, visit <a href="https://en.wikipedia.org/wiki/HTTP_cookie" target="_blank" rel="nofollow">wikipedia.org</a>, <a href="http://www.allaboutcookies.org/" target="_blank" rel="nofollow">www.allaboutcookies.org.</a></p>
    </div>
@stop
