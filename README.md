## Custom Form
[![MIT license](http://img.shields.io/badge/license-MIT-009999.svg)](http://opensource.org/licenses/MIT)
[![GitHub issues](https://img.shields.io/github/issues/live627/smf-custom-forms.svg)](https://github.com/live627/smf-ultimate-menu/issues)
[![Latest Version](https://img.shields.io/github/release/live627/smf-custom-forms.svg)](https://github.com/live627/smf-ultimate-menu/releases) [![Support](http://img.shields.io/badge/PayPal-$-009966.svg)](https://www.paypal.me/JohnRayes)

### Overview
This Mod allows you to create custom forms for your forum which your users can access at "index.php?action=form", these forms are essentially a structured way of allowing your users to submit posts to certain boards, meaning that you can get them to enter certain information into a form and then you can chose how you want that information to be presented within the final outputted post.

You can access a list of your forms and the links to the actual forms themselves by going to "index.php?action=form".

Possible uses for this Mod could include, Support Forms, Staff Application Forms, Error Reporting Forms and etc.

**Settings are found in the Admin panel:** "Configuration"-> "Modifications" -> "Custom Form"  or `index.php?action=admin;area=modsettings;sa=customform`

### Requirements:

- SMF 2.0 or greater
- PHP 7.4 or greater

### Features Explained:
#### Creating/Editing Forms:
This is done in the settings area for this mod, you just need to create a new form by clicking on `Add New Form`, and then set up the information for that form making sure that you have entered in the relevant data for each setting, you will also need to add some fields to the form, otherwise it will be ignored.

#### Viewing a list of forms that you can post:
This is done at the `form` action `index.php?action=form`, you will be able to view a list of forms that you can view and post, as well as a link to the board they belong to and etc.

#### Posting a form:
This is done at the `form` action `index.php?action=form;n=#`, Replace `#` with the actual number of the form. Once the user has filled out the form and saved/submitted, the results will be posted to the appropriate board. You can change the look of this page by creating a Custom Template Function.

#### Custom Template Functions:
This is a feature allows you to create your own custom template function for each form, to do this we suggest that you make a duplicate of the `form_template_example()` function within the 'CustomForm.template.php' file. You can then use the documentation from that function to see how information is passed to it by the Mod, allowing you to change it for your purposes.

Please remember that you have to name the new template function in this format `form_template_{Custom Template Name}`, and you will have to put the correct value from `{Custom Template Name}` into the `Custom Template Function` setting for the form that you wish to use you new template. Further explanation for custom templates can be found in the 'CustomForm.template.php'.

#### CAPTCHA Visual Verification:
Visual verification often referred to as CAPTCHA and used by SMF for registration and posting, is included in the mod to help prevent against bots from using forms as a way to post your forum. Visual verification requires that the user type letters or digits from a distorted image that appears on the screen in order for a form to submit correctly.

By default all forms require visual verification when being filled out by guests and can not be turned off. Alternatively registered members will also be required to use visual verification based on existing settings in SMF.

To access verification settings in for SMF 1.1.x: go to Admin => Registration => Settings or index.php?action=regcenter;sa=settings

To access verification settings in for SMF 2.x: go to Admin => Configuration => Security and Moderation => Anti-Spam or ?action=admin;area=securitysettings;sa=spam.

Further explanation of a settings functionality can be found by clicking on the [?] help button next to each setting.

### Tutorial:
Linked below is a step by step tutorial on how to make the 'New Topic' Button re-direct to the form you wish the user to use for posting in that forum.
http://www.simplemachines.org/community/index.php?topic=248871.msg3726297#msg3726297

### Version Changes:
- https://github.com/live627/smf-custom-forms/blob/development/CHANGELOG.md
- https://github.com/live627/smf-custom-forms/blob/master/CHANGELOG.md
