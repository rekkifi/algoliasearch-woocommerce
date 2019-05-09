## Plugin sunset

TL;DR: This plugin is no longer supported. Please use our API client guide instead [https://www.algolia.com/doc/integration/wordpress/getting-started/quick-start/](https://www.algolia.com/doc/integration/wordpress/getting-started/quick-start/).

After discussing with a lot of you, we've realized that our WordPress plugin, while being easy to implement and use, did not provide the room for customization necessary to build satisfying, advanced search and discovery experiences on Wordpress websites. 

That's why **we have decided to double down on our new PHP API client instead**. We created [comprehensive documentation](https://www.algolia.com/doc/integration/wordpress/getting-started/quick-start/) to guide you to index your Wordpress content, optimize your relevance, and build state-of-the art front end experiences relying on the API client.

We believe this approach is the most robust, satisfying and future-proof way to build great experiences for Wordpress websites. **We will therefore stop supporting our WordPress plugin** following this timeline:

* From 02/05/19: we won't add any new feature or fix any new functional bug in our Wordpress plugin. 

* From 31/12/19: we won't provide any security fix to our Wordpress plugin

Please note that **if you already have the plugin set up and are satisfied with your current integration, you can keep using the plugin forever**, knowing that it won't be supported according to the timeline above. It will still work as is, in its current state, on your website.


## Documentation

[Follow this link to access the documentation](https://community.algolia.com/wordpress/woocommerce.html)

## Development

**Install dev deps**

```
$ npm install
```

**Compile sass**

```
$ gulp sass
$ gulp sass:watch
```

**Update I18n .pot file**

```
$ gulp makepot
```
