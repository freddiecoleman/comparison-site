## Comparison Site Builder

This tool allows you to easily create a comparison website. No, not just a "price comparison website", you can compare anything you want.

 The site is configured in the admin panel by specifying the subjects (to be compared), the type of subject (e.g. insurance, smart phone, TV), and the attributes for the type (e.g. cost, weight, rating).

A RESTful API is provided which allows you to post data to the server easily to update the comparison data.
The API is designed to accept any data that you input, even if you do not specify the fields in advance, so that you can accept the accept the fields later if you wish.

### Technologies utilised

* Laravel
* MySQL (for the site and configuration)
* MongoDB (for the API)
* Twitter bootstrap (possibly replace later)

#### Other tools used

* Bower
* Composer
* Grunt
* Vagrant
* Vaprobash
* Homestead