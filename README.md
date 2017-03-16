# m1-hreflang-implementation
Implement rel alternate links in Magento

When you’re setting up a multilingual store, Google has some directives and recommendations as to what should be done for your website to be indexed correctly, and rank higher in their search.

One of those recommendations is implementation of rel=”alternate” links, if you have pages translated to another language.

Syntax we should be using looks like this:
```
<link rel="alternate" hreflang="es" href="http://es.example.com/" />
```
If we adapt this syntax to a Magento store, this would look like:
```
<link rel="alternate" hreflang="first-two-letters-of-a-store-locale" href="url-of-the-page-in-other-language" />
```

What we need to do is insert alternate links in every pages’ head. One way of doing this would be creating logic needed in head.phtml file.
The better way would be using an observer to listen to some event, and insert links to head using a method Magento already has – addLinkRel().
In this example, we’ll use controller_action_layout_generate_blocks_after event. There probably is some other event that is more suitable, but this one will do the trick.

Module created by [Inchoo](http://inchoo.net/magento/implement-rel-alternate-links-in-magento/)
