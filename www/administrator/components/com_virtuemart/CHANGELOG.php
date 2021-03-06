<?php
defined( '_VALID_MOS' ) or die( 'Restricted access' );
/**
*
* @version $Id: CHANGELOG.php 1309 2008-03-11 18:49:05Z soeren_nb $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
?>
<pre>
This is a non-exhaustive (but still near complete) changelog for
VirtueMart, including beta and release candidate versions.
Our thanks to all those people who've contributed bug reports and code fixes.

Legend:

#	Bug Fix
+	Addition
^	Change
- 	Removed
!	Note

--------------------------------------------------------------------------------------------------------------

VirtueMart 1.0.x
*************************************

--- VirtueMart 1.0.15 released (11.03.2008) ---

06.03.2008 thepisu
# Task #1466 - Canada Post shipping module missing language strings

04.03.2008 soeren
# too long words in reviews break the site layout (ps_reviews.php)
# Random Products Module: removed one useless "tr" tag being printed out (mod_virtuemart_randomprod.php)
# Fixed "Security Token not found" Message on Joomla! 1.0.15 when magic_quotes_gpc = Off	(ps_main.php)

23.02.2008 gregdev
# german.php should just point to germanf.php.

20.02.2008 soeren
 # Task #1473 -  ps_product_category.php timeout
 
05.02.2008 soeren
# Task #1769 - Users, Shopper Groups not functioning as expected in front-end and admin (also: # Task #1752 - Bug in adding a user to a shopper group)

31.01.2008 soeren
# VirtueMart Module not calculating correct "validate" value for Joomla! 1.0.14 login

--- VirtueMart 1.0.14 released (30.01.2008) ---

30.01.2008 gregdev
# Fixed missing global $VM_LANG.

30.01.2008 soeren
# Task #1479 - Backend - Cancel shipping address takes user back to user list

27.01.2008 thepisu
# States list now ordered by state name (was in DB order)
# Added translations for some hardcoded strings

25.01.2008 soeren
# Task #1374 - Stock notification message is shown twice.
# Task #1615 - Admin: category search multiple page error (thanks to Michael Miller for finding, reporting and fixing this)
^ Edit Product Link in the frontend pointing to "index2.php" now

18.01.2008 soeren
# Task #1686 - Call to undefined method ps_html::selectlist when accessing Account Information (ps_html.php)
15.01.2008 soeren
^ optimized query in dynamic_state_list function (not running a query for each country, but just one now, ps_html.php)

11.01.2008 soeren
- removed PDF MakeFont Package
# Task #1658 - Module permission form error

10.01.2008 soeren
# Task #1609 - IE7 support PNG. The funtions of sleight.js aren´t necessary!
# Task #1615 - Admin: category search multiple page error (product.product_category_list.php)
# Task #1610 - product.product_form.php missing terminating "&lt;/td&gt;"
# Task #1628 - When Image doesn't exist, Image update will fail (ps_main.php)
+ added CSRF Protection (Cross-Site Request Forgery)
# fixed PHPMailer Vulnerability (https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1734811&amp;group_id=26031&atid=385707)

10.01.2008 gregdev
# Task #508 System allow a end-date before the start-date for discount

27.11.2007 thepisu
# Task #1110 hardcoded message in store.payment_method_form.php
# Task #1133 Hardcoded Language strings (phone/fax)
# translated common menubar buttons (publish....)

18.11.2007 soeren
+ ePay (Danish Payment Gateway) Module v. 1.2
# fixed insecure usage of the read_file function

09.11.2007 thepisu
# Task #1373 - Hard coded language strings in zw_waiting_list.php
# in zw_waiting_list.php, changed PHP mail() with vmMail() function
# added translation for 'Update Status'
# translation strings missing in slovenian files

22.10.2007 soeren
# Task #1454 - Fix for Payflow Pro (thanks to Steven!)

--- VirtueMart 1.0.13a released ---

13.10.2007 soeren
# Broken Registration on checkout (ps_shopper.php)
# Task #1431 - Advanced Search Result page direction (shop.browse.php)

10.10.2007 soeren
# Task #1234 - In ps_order.php: $curr_order_status="C" (missing double equal!)

--- VirtueMart 1.0.13 released ---

09.10.2007 soeren
^ removed "eval"s from the image processing function, fixed using the disableToggle function in the product form
# fixed Mambo 4.6.2 login issue (+CSV Upload Error) - thanks to Andr้s

08.10.2007 soeren
^ fixed some more Joomla! 1.5 compatibility issues

05.10.2007 gregdev
# Fixed security problem 

26.09.2007 soeren
# fixed "Transaction Key Change" not working under Joomla! 1.0.13

14.09.2007 soeren
# Fixed Checkout Redirection when VirtueMart is restricted to registered users (Access denied...)

06.09.2007
# Task #1363 - Fixed Regression in attribute list parsing. Edited ps_product_attribute.php.

05.09.2007 gregdev
#  Task #1409 - fixed back button to return to checkout page when updating address during checkout
^ Updated Joomla! 1.5 compatibility file (for partial compatibility)

25.08.2007 soeren
# Task #1325 - Extra fields are not checked in the account.billing page
# Task #1340 - [Import CSV] update product erase product_attribute (attribute_values) infos
# Task #1357 - Performance problems creating new products
 
16.07.2007 gregdev
# Task #1328 - long php opening tags missing in vendor.vendor_form.php

06.07.2007 gregdev
# Check for set $_REQUEST entries before resetting values

05.07.2007 gregdev
# Corrected filename error in usps.ini

23.07.2006 soeren
# fixed the Login issues with Joomla! 1.0.13 (ps_session.php, ps_shopper.php, virtuemart_parser.php)

--- VirtueMart 1.0.12 released ---

26.06.2007 gregdev
# Corrected PHP short tags in USPS shipping module

25.06.2007 soeren

^ Updated the USPS Shipping module to version 3.0 (thank you Corey!!)

20.06.2007 soeren
# Task #1255 - image uploads broken when open_basedir is set (ps_main.php)
# Task #1289 - Logged out when using Secure https in Joomla - Virtuemart Backend - Bug (ps_session.php)
^ Manufacturer Module: Stripped off Tables, Changed manufacturer list from table rows to unordered list

19.06.2007 soeren
# Task #1297 - Coupon discount total does not adjust after removing item from cart (basket.php, ps_cart.php)
# Task #1299 - Credit card number accepts a string as valid (ps_payment_method.php)
# Task #1319 - Lockup issue with permissions on browse_* files. (ps_main.php)

18.06.2007 gregdev
# Fixed fatal coupon error upon adding coupon to order (ps_coupon.php)
# Corrected LEFT JOIN that was causing payment method code to not run (checkout.thankyou.php)

13.06.2007 soeren
# Task #1316 - When deleting orders, records in 'order_history' and 'order_user_info' are not deleted (ps_order.php)
# Fixed the htmlentities bug, which caused the Admin Menu to display wrong characters or not to be displayed at all (header.php)

--- VirtueMart 1.0.11 released ---

03.05.2007 gregdev
# Task #966 - Cleared credit card info when using non-credit card payment method.
# Fixed a text size bug in the product scroller.

03.05.2007 soeren
# authorize.net: Test Mode didn't work. The host test.authorize.net is not used anymore. VM will use a POST var instead to indicate a test request.
# authorize.net: Response Codes were not correctly recognized due to a wrong setting of the encapsulation character for the response string.

27.04.2007 soeren
# Task #1273 - Error in creation of HTML confimation Email if more than a specific amount of products was ordered
# Task #1272 - Error in product attributes with attribute depending price modifier

30.03.2007 gregdev
^ Changed shop_browse_queries.php to use a LEFT JOIN for #__{vm}_shopper_vendor_xref (fixes empty categories when table entry is missing).

21.03.2007 soeren
# Task #1226 - VM Search in admin backend has problems with text strings using # symbol
# the variable PHP_SELF was not properly cleaned (virtuemart_parser.php)

15.03.2007 soeren
# JoomFish language setting is overwritten in virtuemart.cfg.php ( Task #1282 - Virtuemart does not apply proper language switching)
# CSV Upload not recognising correct Mime Type due to case-sensitive equality check

13.03.2007 soeren

# Task #1187 - Virtuemart does not redirect correctly if only 1 payment option is available. (ps_checkout.php)
# Task #1200 - checkout.thankyou shows empty page when order_total is 0 (checkout.thankyou.php)

--- VirtueMart 1.0.10 released ---

03.03.2007 gregdev
# Added global $vmLogger in ps_config.
# Changed $page in admin.shop_cfg form (due to earlier ps_config change).

02.03.2007 soeren
# Task #1174 - Coupon discount does not change with Quantity (basket.php)
+ added Result Counter to the browse page (Results 1 - x of XX )
# quotes are not escaped in category names in the VM module in JSCookTree mode (vm_JSCook.php)
^ hiding text "This category is currently empty" when the category has child categories (shop.browse.php)

01.03.2007 gregdev
^ optimized category tree creation (ps_product_category.php, product.product_category_list.php)
 
27.01.2007 soeren

^ no cookie check is done when the shop is used as catalogue only (ps_session.php)
# fixed SSL redirection when Shared SSL is used on Joomla! 1.0.12 (ps_session.php)
^ changed the simple attributes' price modifier handling from user-submitted prices to price modifiers retrieved from
	the product's attribute field in the DB. So the [+3.99] price modifiers are not longer part of the
	drop down list, but just the attribute values like "red" or "big". (ps_product_attribute.php, ps_product.php)
	
21.02.2007 soeren
# adjusted the compat file for the latest Joomla! 1.5 SVN (compat.joomla1.5.php)
# mosproductsnap - Fatal Error (only variables should be passed by reference)
+ added "featured=y" and "discounted=y" parameters for the browse page to allow to filter by featured or discounted products (shop_browse_queries.php)

19.02.2007 soeren
# Task #1161 - Updated PS_Linkpoint should be included in future releases
# Task #1160 - Registration - Empty state list + Fix (ps_html.php)
# Task #1153 - email address not required at registration (ps_shopper.php)
# Task #1150 - vmcchk=1 breaks SEO URL (ps_session.php)
# Task #1147 - shop.parameter_search_form.php error with template...
# Task #1146 - Small bug in order-change-mail (ps_order.php)

13.02.2007 soeren
^ changed the input field for attributes and custom attributes in the product form to a textarea (product.product_form.php)
# fixed XSS vulnerabilities globally (virtuemart_parser.php)

16.01.2007 soeren
# Task #1098 - invalid html in shop.index.php
# Task #1100 - Make Manufacturers module work on "Select -> xx" rather than having to click [Search] button (mod_virtuemart_manufacturers.php)
# fixed an XSS vulnerability (ps_cart.php)
# Task #1084 - Memory eating loop when non-available fetching remote files (ps_product_files.php)

--- VirtueMart 1.0.9 released ---

06.01.2007 soeren
# Task #1085 - Save Order Button (product.product_category_list.php)

04.01.2007 soeren
# Task #1038 - Category search doesn't show category name (product.product_category_list.php)
# fixed a Login-Issue when using Shared SSL on Joomla! 1.0.12 (ps_session.php)
# Task #1086 - Paypal Payments will not be confirmed, fixed a time-out error in the PayPal IPN script (notify.php)
# Task #1081 - Cannot delete products (global error when working with products and categories; virtuemart_parser.php)

04.01.2007 gregdev
# Fixed check for authorize.net test mode (ps_authorize.php).

--- VirtueMart 1.0.8 released ---


28.12.2006 soeren

^ Update the language files, removed some errors/typos
# fixed a security issue in virtuemart_parser.php

27.12.2006 soeren
# Task #1072 - Wrong Tip! (coupon.coupon_form.php)
^ displaying Manufacturer name in the product list instead of the vendor name.


21.12.2006 soeren
^ better ordering for the list of products in the tab "Related Products" => now grouped by category including the category name
# Task #1069 - "< ?php echo" appears in New Item button link when creating a child item
19.12.2006 soeren
# file downloads (ps_main.php, function vmReadFileChunked): 
	^ preventing script time-outs, 
	^ shortened the script sleep phase to 100 msec.
# Add-to-Cart button shown for users that aren't allowed to see prices (shop.product_details.php, see http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=13824.0)
# "&amp;#039;" instead of "apostrophe" in title tags (shop.product_details.php)
 
14.12.2006 soeren

^ added RolandH's CSV Import improvements (v. 0.75, http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=22738.0, thanks RolandD!!)
# Task #1059 - Wrong Sort title in shop.browse.php
# missing month names in the language file

13.12.2006 soeren

# Fixed Login issue during Checkout on Mambo 4.6.x and Joomla! 1.5
# Task #1052 - php short tags in many files
# Task #1051 - PDF generation Problem

09.12.2006 soeren
# Task #1045 - ps_product_category::get_navigation_list cannot be called twice! (ps_product_category.php)
# Task #1040 - Redirect after registration (ps_shopper.php)

08.12.2006 soeren

+ added a pathway to the cart page (shop.cart)
- removed the PayFlow Pro payment class, it can be downloaded including the necessary SDK from virtuemart.net

! various fixes to make VirtueMart compatible to Joomla! 1.5
# Task #998 - reordering fails due to incorrect number of rows
^ changed all language constants into VM_LANG variables (a lot of files affected!)
^ added all the language strings from the Joomla language file used in Virtuemart to the VM language files
! new language tokens in the language files

07.12.2006 soeren

# Task #390 - Top Ten Product Module randomly generates items (mod_virtuemart_topten.php)


01.12.2006 soeren

# Task #1035 - Sorry, but the Product you\'ve requested wasn\'t found! (shop.product_details.php)
# Task #1029 - You are not authorized to view this resource. when viewing user list
# Task #1012 - Manufacturers in Manufacturer Module List not Alpha sorted
 
29.11.2006 gregdev

# Adjusted so that updating an existing shipping address does not require a new address name (ps_user_address.php)

27.11.2006 soeren

# Task #1011 - Cancelled Products get added to Top Ten Module (ps_order.php)

24.11.2006 soeren
# Task #1027 - Error in stock handling (ps_checkout.php)
# Task #1014 - Authorize.net test mode error
# Task #1015 - Pathway duplicated in account.billing, account.shipping, account.shipto

22.11.2006 gregdev

#  Error suppression on some non-existant PayPal variables in notify.php; added vendor id for order status update emails in notify.php
#  Task #842 - fixed preselected country when editing an existing shipping address 

22.11.2006 soeren

# fixed PayPal IPN script, mail_download_id works (notify.php)
# Task #877 - cannot complete checkout when final amount is 0 (ps_checkout.php)

10.11.2006 gregdev
#  Fixed duplicate error message when no shipping address is chosen during checkout (Task #972)

30.10.2006 soeren

# no title tag displayed for empty categories (shop.browse.php)

27.10.2007 soeren
# PayPal notify script not sending Download ID (notify.php, thanks R Browne!; http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=22296.msg56419#msg56419)
# Task #996 - Brazilian Portuguese translation problem (brazilian_portuguese.php)

18.10.2006 gregdev

#  Task #959 - Virtuemart search bot not working properly

17.10.2006 gregdev

#  Task #969 - order_id error in Dutch language file VM vs. 1.0.7
#  Task #973 - Error in mod_product_categories
#  Task #956 - Closing DIV-Tag in html/shop.cart.php
!# fixed various non-critical XSS vulnerabilities

13.10.2006 gregdev

!# fixed various non-critical XSS vulnerabilities

04.10.2006 gregdev

#  Task #978 - PHP Short-Tag used in ps_paypal.php

02.10.2006 gregdev

!# fixed various non-critical XSS vulnerabilities QUERY_STRING, category_id, and shopItemid

02.10.2006 soeren

!# fixed various non-critical XSS vulnerabilities though Itemid parameter

---- VirtueMart 1.0.7 released ----

13-09-2006 soeren

# vendor info page not displaying information (RG_EMULATION issue, shop.infopage.php)

12-09-2006 soeren

# Fatal Error on admin user form (admin.user_form.php)
# Smaller fixes for RG_EMULATION, 0 (ps_checkout.php, ps_reportbasic.php, reportbasic.index.php)
^ CSV: If a field is NOT included in the CSV file (like product description) an existing value won't be overwritten
^ CSV: removed the requirement to have all fields in the CSV file (you can now leave all optional fields away!)
^ CSV: Changed the default CSV Field Ordering (only affects new installations)
	The first fields are now: product_sku,product_name,category_path,product_price,product_s_desc,product_desc,....

+ added a login form at the download page, so returning customers can easily login now.
^ improved the check for the session save path. If the session save path is not writable due to open_basedir
	restrictions, no error is generated, because PHP can use such a directory when it is set in the php.ini

08-09-2006 soeren
+ introduced a new cookie check function that checks if the user accepts cookies - and if not - displays
	a nice information about this issue. (ps_session.php)
	
07-09-2006 soeren
- removed the call to session_write_close() completely (was introduced for Mambo compatibility, but now it seems just to break it) (ps_session.php)
# PNGs not displaying in Internet Explorer: updated the Sleight.js for PNG/IE Fix (sleight.js)

03-09-2006 soeren

# Problem downloading larger files, e.g. >16MB (ps_main.php) (http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=20481.msg53015#msg53015)


02-09-2006 gregdev
# Task #938 - Product list select statement causes MySql out of memory error
# Task #734 - transmenu.php wrong itemid in a first menu level
# Task #933 - Reports fail with RG_EMULATION=0
# Task #870 - Wrong template used for Order Status Change link (ps_order.php)
# Task #868 - missing pathway's style class in Account Maintenance (account.billing.php, account.order_details.php, account.shipto.php, account.shipping.php)
# Task #867 - errors in german language-file
# Task #861 - Control panel when press any button on frontend administration are not displayed. (reportbasic.index.php)

31-08-2006 soeren

^ updated Error/Messages CSS styles
^ Link behaviour changed for "I agree to the terms of service". 
	Now a click on the link doesn't toggle the checkbox. (checkout_register_form.php)

29-08-2006 soeren

# Task #887 - Minimum Amount for Free Shipping (ps_main.php)
^ EU tax mode implementation by Sam Morris <sam@robots.org.uk>
	(http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=21124.msg52587#msg52587)
	affected files: ps_checkout.php, ps_product.php, basket.php, admin.show_cfg.php, all language files
# possible errors in tax total calculation when coupons are used in vendor-based tax mode
# Task #901 - FileManager's pics > Commas in Tittle bug.
^ Task #904 - Cannot delete Product_type assingment of a product
# Task #735 - attributes errors (ps_product.php) - (double currency symbols and price modifiers not adding up when one "price setter" is selected in the attributes)

# Task #866 - Error removing last item from cart (checkout.index.php)
^ Adding the same product again and again now updates the quantity in cart
# Task #839 - "Add to Cart" twice for same product removes product (ps_cart.php)
^ added cache-control / expire / last-modified headers in show_image_in_imgtag.php to 
	increase performance by using client caching capabilities
^ updated the mShop_validateEmail function to check for correct email addresses (ps_main.php)
+ added name & subject checks for email sending (J! 1.0.11) (ps_main.php)
^ changed the vmSpoofValue function to work with J! 1.0.11 (ps_main.php)

26-08-2006 soeren

#  Task #902 - extra_field_4, fatal error when using extra fields in language file (checkout_register_form.php

23-08-2006 soeren
# "A shipping address with this nickname already exists" (ps_user_address.php)
# Blank PO on checkout (ps_checkout.php)

14-08-2006 soeren

# Task #804 - On status change text showing 'rn' instead of CR (ps_order.php)

27-07-2006 soeren

# Task #850 - Order list not showing all orders (order.order_list.php)

22-07-2006 soeren

+ added a workaround for installations where the "Session Save Path" is not writable. 
	VM will try using the global cache path for storing session files instead.(ps_session.php)
	
17-07-2006 soeren
# wrong redirection on checkout login when using Shared SSL on a Windows Server (checkout.login_form.php)
# added the missing function mosHash (Mambo-only problem!)

---- VirtueMart 1.0.6 released ----

08-07-2006 soeren

# fixed USPS class by Corey

07-07-2006 soeren

# empty cart on checkout when using Shared SSL in SEF mode
# Task #775 - Transmenu (at least) does not sort categories correctly (Shop_Menu.php)
# Task #802 - filename not saved when adding a product (ps_product.php)
# Task #803 - TAX now showing on attribute price modifications in confirm Mail AND order confirmation page (account.order_details.php, ps_checkout.php)
# Task #829 - Call to a member function on a non-object (on order status update, ps_order.php)
+ reintroduced the PayPal IPN amount/currency check, now using the correct PayPal variables (notify.php)

02-07-2006 soeren

# Free Shipping not calculated on "subtotal with tax", but on "subtotal without tax" (ps_checkout.php)
^ Updated Search Mambot (Thank you Mark! - http://virtuemart.net/index.php?option=com_smf&Itemid=71&topic=19615.msg46837#msg46837)

28-06-2006 soeren

# Task #665 - shipping address save but without display (virtuemart_parser.php)
# Task #780 - VM don't send the confirmation order to user or admin, update status order don't run (ps_affiliate.php)
# Task #817 - relative url is missing server base (ps_product_attribute.php)
# 2Checkout order_total number format corrected
# Task #788 - HTML bug in ps_order.php
# Task #787 - Tab 'Order Status' in order admin panel empty in IE7 (order.order_print.php)
# Task #784 - Can't edit files/images without a title (product.file_list.php)
# Task #801 - 'vmMenu' not defined (htmltools.class.php)
# Task #800 - Order list error: double order listings of the same order (order.order_list.php)
# Task #814 - mysql_escape_string issues (class.inputfilter.php, htmltools.class.php)
# Task #816 - missing "alt" attribute in category images on shop.index.php
^ adjusted login procedure to comply with Joomla 1.0.10 (ps_main.php, checkout.login_form, mod_virtuemart.php)
	+ added new functions called "vmSpoofValue" and "vmSpoofCheck" as used in Joomla 1.0.10

07-06-2006 soeren
# Task #795 - Edit user with VM 1.0.5 and Joomla 1.0.9
# "only variables should be assigned by reference..." errors in the file menuBar.class.php

---- VirtueMart 1.0.5 released ----

07-05-2006 soeren

# Itemid issue: the shop was also fetching restricted menu items and used their Itemid, which resulted in "You're not allowed to view this resource..." (ps_session.php)
# added missing Itemid parameter in the product file list (ps_product_files.php) and the PDF-button link (virtuemart.php)
# Task #724 - Coupon discount becomes 0.00 when adding a new item (basket.php)

05-05-2006 soeren
^ Updated the UPS and USPS shipping modules with the versions contributed by koltz & deneb
# Task #738 - shop.pdf_output.php creates a loop when /usr/bin/htmldoc is available (shop.pdf_output.php)

! DATABASE STRUCTURE CHANGED!
^ The length of some DECIMAL fields is not enough
#############################
	# Allow Shopper group discounts up to 100.00%
	ALTER TABLE `jos_vm_shopper_group` CHANGE `shopper_group_discount` `shopper_group_discount` DECIMAL( 5, 2 ) NOT NULL DEFAULT '0.00';
	# Allow bigger discounts than 999.99
	ALTER TABLE `jos_vm_product_discount` CHANGE `amount` `amount` DECIMAL( 12, 2 ) NOT NULL DEFAULT '0.00';
	# Allow prices up to 9 999 999 999.99
	ALTER TABLE `jos_vm_product_price` CHANGE `product_price` `product_price` DECIMAL( 12, 5 ) NULL DEFAULT NULL ;
	# Adjust order item price
	ALTER TABLE `jos_vm_order_item` CHANGE `product_item_price` `product_item_price` DECIMAL( 15, 5 ) NULL DEFAULT NULL ;
	# Adjust order item final price
	ALTER TABLE `jos_vm_order_item` CHANGE `product_final_price` `product_final_price` DECIMAL( 12, 2 ) NOT NULL DEFAULT '0.00';
	# Adjust order total, allowing totals up to 9 999 999 999 999.99
	ALTER TABLE `jos_vm_orders` CHANGE `order_total` `order_total` DECIMAL( 15, 5 ) NULL DEFAULT NULL ;
	ALTER TABLE `jos_vm_orders` CHANGE `order_subtotal` `order_subtotal` DECIMAL( 15, 5 ) NULL DEFAULT NULL ;
	
	# Allow larger coupon amounts
	ALTER TABLE `jos_vm_orders` CHANGE `coupon_discount` `coupon_discount` DECIMAL( 12, 2 ) NOT NULL DEFAULT '0.00';
	ALTER TABLE `jos_vm_coupons` CHANGE `coupon_value` `coupon_value` DECIMAL( 12, 2 ) NOT NULL DEFAULT '0.00';
	
	# Allow larger payment discounts
	ALTER TABLE `jos_vm_orders` CHANGE `order_discount` `order_discount` DECIMAL( 12, 2 ) NOT NULL DEFAULT '0.00';
	ALTER TABLE `jos_vm_payment_method` CHANGE `payment_method_discount` `payment_method_discount` DECIMAL( 12, 2 ) NULL DEFAULT NULL ;
#############################
	

02-05-2006 soeren

# could not update or delete in/from cart for products with single quotes in their attribute name/value (ps_cart.php)

27-04-2006 soeren
# Task #729 - additional address links in admin (admin.user_form.php)
# Task #733 - Discount causes error message in Order Details page (account.order_details.php
# Task #73 - Order Confirm E-Mail - Plain text & html text of Message differ (ps_checkout.php)
# fixed mis-aligned icons on administraton start page (ps_html.php)
# product type list & form missing an object (product.product_type_list/_form.php)

23-04-2006 soeren

+ Now it is possible to easily inform your customers about their order cancellation right
	and your returns policy (as required by law in most european countries!)
	=> added 3 new configuration parameters (affected files: ps_config.php, admin.show_cfg.php, checkout.index.php, language files)
	! Update your configuration when updating from an earlier version
# hiding attribute price modifiers when the user has no permission to view prices (ps_product_attribute.php)

20-04-2006 soeren
# Task #722 - Undefined index: coupon_discount in ps_checkout.php
# Task #721 - Trying to get property of non-object in shop.debug.php
# Task #720 - Undefined $VM_LANG in ps_config.php
# Task #719 - User list and user registration not compatible with UserExtended Component (ps_perm.php, admin.user_list.php)
# Task #715 - List Prices not showing since upgrade to 1.0.4 (ps_product.php, function show_prices)
# Task #560 - Clone Product with Child Products (added "SHOW" as result-returning-case ps_database.php)
# Task #675 - No permissions to view products after search (virtuemart.searchbot.php)
# Task #698 - Lost password link uses relative link instead of absolute (mod_virtuemart.php)
# Task #707 - Payment method at the end of the checkout is not shown (ps_checkout.php)
# Task #703 - Continue Shopping appears after modifying order details in shopping cart 
^ registered users (logged in) who are NOT registered as a customer (no billing address and 
	no shopper group) now get the "default" shopper group id when browsing the shop. (ps_perm.php)
	
18-04-2006

# Task #705 - Product Type Pagelinks are not working due to wrong $num_rows
# Task #706 - Session Problems in Mambo 4.5.3h (closing opened sessions when session.auto_start=1, ps_session.php)
# search for the correct flypage lead to endless loop (ps_product.php)

09-04-2006

# Task #686 - VirtueMart and Mambo 4.6.0 (admin.user_form.php. virtuemart_parser.php)
# Task #646 - Search according to Parameters incorrect query
# Task #642 - Set Locale Error (virtuemart_parser.php)
 
02-04-2006 soeren

# Task #632 - get_flypage doesn't take into consideration parent products (ps_product.php)
# Task #631 - Customer Unable to Remove Data from Bill To / Ship To Fields (ps_shopper.php)
# Task #629 - PayFlow Pro does not handle 4 digit expiration dates gracefully
# Task #511 - Discount % percentage is ignored by cart (ps_product.php)
# Page redirection on error from Ship-To address from fixed, thanks TJ! (account.shipto.php)

30-03-2006 soeren

^ integrated the changes to the authorize.net class by Daniel Wagner (http://virtuemart.net/index.php?option=com_flyspray&do=details&id=634&Itemid=83)
# wrong object names in PayPal notify.php script lead to a fatal error
# Task #656 - "Remember Me" must be enabled to checkout, checkout_registration_form.php
# tooltip function: added charset parameter to encode UTF-8 strings too, htmlTools.class.php
+ introduced a new function called "vmGetCharset" to return the current charset from the _ISO setting (UTF-8 by default), ps_main.php

28-03-2006 soeren
# query error in ps_affiliate.php
# fixed reviews listing ("More..." - link when more than 5 reviews exist for a product) in the frontend (ps_reviews.php)
# fixed page navigation on product review list in adminsitration (product.review_list.php)
+ customer name on order list (thanks to deneb!), (order.order_list.php)
# Fixed PayPal notify.php script:
	- wrong field name (` order_currency` instead of `order_currency`)
	- checking received currency and amount against database
# parameter search query missing a `

27-03-2006 soeren

# version.php causing fatal error regarding "class vmVersion previously declared..."
# Prices visible to all users, although restricted
# Admin Menu not visible with chinese language file (htmlentities missing third (=Charset) parameter)
# CSV Export doesn't export parent product SKU (parent-child relationship gets lost)
# fixed a small typo in the product scroller module

---- VirtueMart 1.0.4 released ----

23-03-2006 soeren

# Order "Print View" link lead to a 404 error
+ ProductScroller module: added the category_id parameter to the XML file, so you can now specify a category_id (or a comma-separated list of more than one category_id) 
	to filter the products by (multiple) category/ies
# Product Reviews are not added to the database, although the vote is added
	
20-03-2006 soeren
^ Payment method preselecection: the first displayed payment method is always pre-selected now
# "delete from cart" fails when the custom attribute value contains quotes
# can't assign more than one product type to a product
# Task #622 - Order Update Time is Wrong
# Task #601 - Show the Number of Products in a Category
+ for debugging: added '@ini_set( 'display_errors', 1 );' to virtuemart_parser.php
	for making PHP errors visible
^ changed behaviour for HTTPS links when in HTTPS mode.
	When the user is NOT on "checkout" or "account" pages, all links are generated using the http://... URL
	This will allow leaving the HTTPS mode 2 after the order has been placed.
# Task #490 - adding attributes error on sub-items
# Task #518 - Reports miss same-day orders
# Task #558 - Bug in report basic module
^ showing "no image" image when a product thumbnail image is not available
# Task #470 - Close tablerow after Categorylisting
+ products can be viewed using the SKU now. Works for the product details page:
	Instead of "&product_id=XX" just use "&sku=YY" where YY stands for the SKU of the product
# credit card number not checked on form submit, another bug, same reason: payment method can be left unchecked
+ added: autocomplete="off" to the credit card form to prevent sensible information being prefilled
+ Order item status update by manelzaera
# Task #617 - Wrong image path in account.billing.php
# Task #615 - Cannot add multiple Product Types to a Product

16-03-2006 soeren

# Sort ASC / DESC icon not working on Internet Explorer
# wrong query in payment module for Linkpoint (ps_linkpoint.php)
^ restricting prices by user access level can be completely 
	disabled in the shop administration now (useful for people using ACL extensions like JACL)
# manufacturer search code contained wrong SQL (shop_browse_queries.php) + various SQL fixes

14-03-2006 soeren

# Fixed the session problems (removed the call to session_id() and various lines of unnecessary code)

12-03-2006 soeren

# users, who are logged in, but not yet registered as customer/shopper 
	can't directly continue their "checkout" after registration as shopper
# users who are logged in, but have an empty "usertype" field don't see prices
# added $manufacturer_id support for caching pages

---- VirtueMart 1.0.3 released ----

11-03-2006 soeren
# syntax error in shipping.rate_form.php

10-03-2006 soeren
# Task #325 Log out does not work
# missing $mosConfig_absolute_path in currency_convert.php

07-03-2006 soeren
# many short tag fixes (< ? => < ?php )
# Task #566 - DescOrderBy doesn't work with SEF
# more ps_session class fixes to work on Joomla 1.0.8 & Mambo 4.6
	seems to me as if some Joomla 1.0.8 users are suffering serious Session problems now
^ setting memory_limit to 16M when it is lower
+ multiple tax rate details in order email

04-03-2006 soeren
# short php tags in shop.manufacturer_page.php
# Task #551 - Cart showing extra products after adding first item
# Task #562 - Discount deletion problem

02-03-2006 soeren
# Task #432 - missing ST address in order_user_info when using default address
# Task #482 - error with multiple mod_virtuemart
# Task #541 - IE gets error in admin orders
# View by Manufacturer: Products without prices not shown
+ new global variable $VM_BROWSE_ORDERBY_FIELDS, contains all sort-by fields for the browse page
^ moved $orderby code to shop.browse.php and shop_browse_queries.php
+ new configuration constant: VM_BROWSE_ORDERBY_FIELD can be [product_name|product_price|product_cdate|product_sku]
+ added "ob_start" to the session class to prevent HTML output BEFORE the template is loaded ( Task #553 - Product Display)
^ tax rates in drop-down list in product form are ordered by rate, descending now

28-02-2006 soeren

# tax total calculated based on product tax rate when TAX_MODE = 1 (store-address based tax mode)
# Task #536 - vendor info page error
# page navigation on browse pages contained the live site URL.

22-02-2006 soeren

# standard shipping module doing wrong number_format when amount is greater than 999.99
# fixed: multiple tax rates / subtotal re-calculation when discounts are applied
# ps_product_category::get_cid => category ID query not executed
# attribute prices being displayed without tax, although "show prices including tax" is active
# totals getting stored without decimals: changed "setlocale( LC_NUMERIC, 'en' )" to "setlocale( LC_NUMERIC, 'en_US' )"
+ page title on order details page in account maintenance
# checkout login form using sefRelToAbs for $return
^ using the same "Add-to-cart" image as in product_details in browse page now
# tax rates were stored with 0.0000 value

! DATABASE STRUCTURE CHANGED 
---
	# http://virtuemart.net/index.php?option=com_flyspray&Itemid=83&do=details&id=521
	ALTER TABLE `jos_vm_product_mf_xref` CHANGE `product_id` `product_id` INT( 11 ) NULL DEFAULT NULL 
	
	# Store multiple-tax-rates details for each order when applicable
	ALTER TABLE `jos_vm_orders` ADD `order_tax_details` TEXT NOT NULL AFTER `order_tax` ;
---


21-02-2006 soeren

# Task #525 - USPS shipping module: User details SQL query
# order email: text part had ugly HTML entities in it (e.g. &euro; )
^ file downloads (paid downloads): reading and sending the file is now handled by a new function 
	(previously: readfile, now: vmReadFileChunked )
# fixes for compatibility with Joomla 1.1.x, still maintaining backwards compatibility with Mambo
	- added $vmInputFilter to global declaration list in virtuemart.php
	- virtuemart module dealing with wrong module paths
	- ps_perm needed its own ACL manipulation methods
	- ps_session doesn't need to append "&Itemid=" in the backend
	
17-02-2006 soeren

# When price field left empty and product had no price, a price record (0) was added.
# Task #456 - Foreign adress give error on checkout
	If you leave the ZIP start or end fields empty, automatically "00000" or "99999"
	is inserted. This was a trap for many users.
# Task #515 - Problem with Authorize.net after upgrade
# Task #519 - Fatal error when adding a manufacturer
# linkpoint class using wrong user information query (ps_linkpoint.php)
# order list query error
+ order and user list can be filtered by full name now 
	(before it was possible to search for the first name OR the last name, not both at the same time)
	
14-02-2006 soeren

# Task #514 - add to cart URL does not always work
# Task #509 - Deleting manufacturer bug
# Task #495 - Related products list doesn't update with new products: 
	now displaying 2000 related products instead of 1000.
# Task #483 - fatal error in admin.user_form.php in line 101
# Task #480 - Various Errors (one fatal) in vm_dtree.php
# Task #474 - Changing default flypage is broken
# Task #473 - Free Shipping broken: SQL statement in global.php
# Task #471 - The script sleight.js isn't loaded when SEF URLs is on
# Task #468 - wrong variable in standard_shipping.php
# Task #455 - Silent registration not working

08-02-2006
# "empty cart bug" using Mambo 4.5.3h
# Task #502 - Deleting User From VirtueMart 
# Task #486 - HTTPS Error In Virtuemart.cfg.php (not every server uses port 443 for secure connections)

---- VirtueMart 1.0.2 released ----

19-01-2006 soeren
# Deleting a product didn't delete the product <-> product type relationship,
	so you couldn't delete the product type

16-01-2006 soeren
# Task #443 - Registration not possible with .info domain
# Task #418 - Can't assign multiple product types to a product
# Task #417 - Changing status to 'C' for auth net settle del. trans ID!
# product list not showing all search options
# Using recent Itemid instead of 1, when the Shop has no own Itemid
# Task 412 - no tax on attributes
# Task 413 -  wrong price on details page when using quantity-based prices
+ added Australia Post shipping module by Ben Wilson (ben@diversionware.com.au)
# mosproductsnapshot Mambot wouldn't correctly display linked images
+ Download ID "hack" by Eugene, wooly, scott, joomlasolutions!
	Customers can get their download IDs for downloading files
	directly from the order details page (products are linked)
+ showing filesize for files which are listed on the product details page (by djlongy)

11-01-2006 soeren
# Task #433 Blocked message (popup) on registration

27-12-2005 soeren
# mod_productscroller not using category ID for filtering products

20-12-2005 soeren
^ silently registered users don't have to remember their old usernames now (Task #385 returning hidden/silent users can't use the same email address)
# order list: searching by user names won't work

15-12-2005 soeren
# product prices can be zero or empty now. When the product price is left empty in the product form, an existing price will be deleted and no price will be added.
^ PayPal payment extra info now subtracts order and coupon discounts from the order subtotal
^ Now it's possible to checkout with $0 in the cart. Allows free purchases using gift coupons.
# Tax total is zero although user's country/state combinination has a matching tax rate record (when CHECKOUT_STYLE = 3 or 4)
# Task #364 "thank you for your patience...": wrong Waiting list link
# Task #386 "New user couldn't be added"

10-12-2005 soeren
# currency_convert including wrong DOMIT files.
# user list has no valid user id in the delete link (deleting didn't work)

07-12-2005 soeren
# Task #63: Prices are stored in the session and do not change on update
# wrong xhtml syntax in mod_virtuemart_search
# Task #374: Incorrect "Title" wording on [Featured & Discounted Products] Screen
# Task #372: Product Search doesn't work when Joomla Caching is ON
	(product search pages were cached, so the search function could only be used once)

04-12-2005 soeren
# "product_list" search not working, when a category is selected
^ Extra Fields are now visually integrated in the registration form, not appended at the end
^ more debug output in standard_shipping module (only when DEBUG is turned on)

01-12-2005 soeren
^ attributes are formatted now in the order print screen - just as in the frontend
+ attributes of child products (which were selected by the customer) are stored now which each order
# fixed a bug in the frontend order listing (account maintenance section), which showed no search box and page navigation
# fixed a bug in global.php, where an administrator, which has no record in the table
  jos_vm_auth_user_vendor wouldn't get the vendor information (and see prices in the backend with no decimals)


30-11-2005 soeren
# added a routine to unpublish mambo-phpShop mambots on upgrade
# added checks for the existance of files which are to be loaded
# added a check if $ps_shopper_group is an instantiated ps_shopper_group object to admin.user_form.php
# renamed all occurences of $PHP_SELF to $_SERVER['PHP_SELF']
# fixed a bug in the page navigation on the browse page (document.adminForm is null or not an object)

---- VirtueMart 1.0.1 released ----

28-11-2005 soeren
^ renamed the vmLog function 'flush' to 'printLog' to prevent early flushing (was it caused by the function name?? would be another curious php bug)
! wrong error handling when a user is not allowed to view the requested page (Security Issue).
# wrong featured products links on storeadmin homepage
# PDF output not working
# calling html_entity_decode with an empty string crashed Apache and VM (class.phpinputfilter.php)
 
24-11-2005 soeren
# setlocale( LC_NUMERIC, 'en' ) is used globally for ensuring that numbers are handled with decimal points
# fixed a parser error in the random products module

---- VirtueMart 1.0.0 final released ----

23-11-2005 soeren
# vmPopUpLink generating window with same value for width and height
# removed whitepace at the end of ps_main.php
# even when no discount was selected in the product form, a discounted end price was filled in
# when user is assigned to a Shoppergroup which doesn't exist, the default one is used now (thanks to esteve!)
# CSV-Export: removed export of "product_special" field, because it's not included in the default CSV configuration
# CSV-Export running incorrect query (empty file received)

21-11-2005 soeren
# filenames didn't include the full path
# problem with filemanager: "The request file wasn't found"
^ small DB structure change to allow negative quantities for "jos_vm_product.product_in_stock" (just removed the UNSIGNED attribute)
	ALTER TABLE `jos_vm_product` CHANGE `product_in_stock` `product_in_stock` INT( 11 ) NULL DEFAULT NULL;
# wrong height of full-image-popUp-window in product details
^ (or bug fix?): added ob_start according to this bug report: http://virtuemart.net/index.php?option=com_flyspray&Itemid=83&do=details&id=300
^ fixed the laoyut for IE in "Your store::control panel"
+ added login form to account maintenance pages to allow quick login

17-11-2005 soeren
^ removed the "VirtueMart already installed?" check to allow manual installation.
^ extended ps_html::writableIndicator to process arrays with more than one directory
+ integrated Verisign Payflow Pro payment module into VirtueMart

16-11-2005 soeren

^ splitted up and renamed "/sql/virtuemart.installation.mysql.sql"
	into "/sql/virtuemart.installation.joomla.sql"
	and "/sql/virtuemart.installation.mambo.sql"
	for those users WHO DON'T EVEN LOOK INTO THE FILE THEY ARE UPLOADING IN PHPMYADMIN.
	
^ updated the INSTALLATION.php to be able to distribute a "Manual Installation" package,
	where it is added to as "README.txt"
# authorize.net not getting the correct billto address
^ improved the debug and error message reporting in authorize.net payment module

16-11-2005 schirmer
# switched to vmLogger in payment and shipping modules
# switched to new user_info table in payment and shipping modules


15-11-2005 soeren
# fixed a small bug in the ps_shopper.php
+ new: bulgarian language file
# "Credit Card type not found" error would prevent checkout.

12-11-2005 soeren
# users couldn't rename their username in account maintenance (ps_shopper.php)
# small notices in ps_checkout.php

10-11-2005 schirmer
# renamed 'Log' to 'vmLog' in virtuemart_parser.php

09-11-2005 soeren
# fatal error: prices can't be deleted (ps_product_price.php, product.product_price_list.php)
# renamed class 'Log' to 'vmLog'
# standard shipping module not accepting valid rates onValidate

---- 1.0.0 RC3 released ----

08-11-2005 soeren
# installation displays a log now
# installation would copy files with wrong permissions on upgrade
# product list empty when browsing child products of a product from pages no. >= 2
# ps_checkout typos
# "Empty Cart" - fixed a bug where the session id would have been changed on each page load
	what made keeping items in the cart impossible
	
07-11-2005 soeren

# task #252 (Japanese Yen Currency symbol affects attribute list line break)
# unpublished products were counted in "products in category".
# task #249 (a bug with html_entity_decode ("Warning.....MBCS not implemented"))
# fixed a small notice in vm_dtree.php

---- 1.0.0 RC2 released ----

06-11-2005 soeren
# changed all occurences to 'com_phpshop' to 'com_virtuemart' in payment methods
# bug #164 (Admin doesn't accept any input and doesn't change pages)
# fixed a fatal error in the install.php

04-11-2005 soeren
# when updating the order status from the order list, always a customer notification would be sent
# the Altbody (alternative text part of an email) is utf8_encoded now,
	when the language charset is 'utf-8' (standard in all new language files in joomla!)
+ Manufacturer ID is shown in manufacturer_list now
+ added search by product_sku to searchbot
^ payment method and shipping method are validated again on orderAdd
# fixed the shipping_rate_id validation in the standard_shipping module
# moved the coupon field back into the cart
# wrong names for new customers in overview
- removed the table prefix replacing function from ps_database
^ changed the url formatting function ps_session::url to use $mm_action_url instead of URL
# more fixes to the Shared SSL support (it now logs the user in on the https domain, even when Joomla is used)


02-11-2005 soeren
# fatal error in payment method form in frontend
# passkey change code didn't work (e.g. authorize.net)
# admin top menu didn't show up when quotes in a module name
# usps module referenced wrong DOMIT! path
# coupon add didn't work
# wrong rounding of the subtotal field
! table structure changed!
	#####
	ALTER TABLE `jos_vm_orders` 
	CHANGE `order_subtotal` `order_subtotal` DECIMAL( 10, 5 ) NULL DEFAULT NULL;
	#####
^ refreshed paypal code (removed tax field, charging amount=subtotal+tax and shipping now).
	
01-11-2005 soeren
# category_flypage was 'flypage' regardless of the category setting (changed ps_DB::sf() )
^ changed coupon field to be displayed only on the payment method selection screen
# percentage coupon was miscalculated on quantity update in cart (thanks gwen)
^ currency symbol in store form is now stored as HTML entity (?  => &euro; )
^ payment methods are surrounded by fieldsets now

28-10-2005 soeren
# changed shopmakeHtmlSafe to use hmtlspecialchars instead of htmlentities
# fixed a lot of queries using a database object instead of ps_DB
# replaced all occurences of mosToolTip by mm_ToolTip
# tax rate is automatically divided by 100 when larger than 1.0
# "view more images" wasn't shown on product details, view_images page had SQL errors

27-10-2005 soeren
# fixed a bug in ps_order.php, where the mail would have been sent to '' (nobody)
# some fixes for the wz_tooltip (using htmlentities now)
^ page navigation links only show up when more results are there to display than $limit
+ added page navigation to order list in account maintenance section
+ added tax amount to paypal payment form code
# fixed a big bug in the SQL update of the user data to VirtueMart
+ added quick (un)publish feature to category and payment method list
- files admin.user.hmtl.php, store.user.html.php
^ restricted access to the user list & form to conform with joomla's user component access
+ added new class vmAbstractObject
+ added new handlePublishState function (class vmAbstractObject)
^ changed productPublish function to handlePublishState
! Database table entry changed: 
##############
UPDATE `jos_vm_function` SET `function_name` = 'changePublishState',
`function_class` = 'vmAbstractObject.class',
`function_method` = 'handlePublishState',
`function_description` = 'Changes the publish field of an item, so that it can be published or unpublished easily.' WHERE `function_id` =139 LIMIT 1 ;
##############

26-10-2005 soeren
+ added debugging to image upload function
# Bug #181 ? Can't add new prices to product

25-10-2005 soeren
# Bug #174 ? Checkout using USPS Module, fixed path to xml domit! library
^ renamed /html/VERSION.php to /html/footer.php
^ changed the colors of the order list to joomla css classes (account maintance section)
# FR #127 font size in tab headings too big in safari browser
+ added new language tokens for the Log integration
# Bug #166 ? virtuemart-beta4-shared SSL
# Bug #173 - Registration with e-mails over 25 characters
# bug #176 - beta4: message tax included displayed even if OFF
^ FR #125 vendor name in shopper group drop-down

24-10-2005 soeren
# fixed a bug where "my-email-address@domain.com" couldn't be used for username (converting - to _ now)
^ file uploading errors are handled better now
+ introduced new global Log object for better Error Message Handling
	See http://pear.php.net/package/Log for docs.
	The class and its child classes can be found in /classes/Log. VM uses a modified version
	of the display class. Support for buffering and formatting depending on priority was added.

	
22-20-2005 soeren
+ added ability to change username + password through shop's billing form
# waiting list extension printing errors...

20-10-2005 soeren
# fixed various bugs in modules (vm_dtree, vm_transmenu, vm_JSCook, vm_product_categories, vm_productscroller)
# category_id is lost when (un)publishing a product directly from the product list

19-10-2005 soeren
# fixed session debug messages, a session isn't started in the backend now
# fixed various installation / update bugs
^ changed Mail functions
	* renamed mShop_Mailer to vmMailer
	* added the functions vmMail (similar to mosMail) and vmCreateMail( similar to mosCreateMail)
	* line-ending fix for Mac & Win problems sending mail (Could not instatiate mail function)
	
# made labels for payment methods clickable
# fixed bug #137 'unpublished products can become related products'

=======
19-10-2005 schirmer
#  fixed Top10 module showing products multiple times if it has more than one category


18-10-2005 soeren
^ Changed the field jos_vm_order_item.product_item_price from DECIMAL(10,2) to DECIMAL(10,5) to prevent rounding errors
##########
ALTER TABLE `mos_vm_order_item` CHANGE `product_item_price` `product_item_price` DECIMAL( 10, 5 ) NULL DEFAULT NULL;
##########

+ re-added shop.registration.php (includes login form and registration form)
# changed cart initialitation function from "ps_cart" to "initCart"
# fixed bug #135 Cannot use a scalar value as an array
# bug in product folder view
^ introduced new blue icons
# bug in product file form + filemanager

17-10-2005 soeren
# user registration required email, although no email field was there
# credit card payment wasn't recognized correctly on order details screens
^ added Credit Card details to order confirmation email
^ last 4 digits of a Credit Card number are masked by asterisks now (security!) in administration
# fixed the PDF function (a file was missing php code), updated HTML2FPDF to version 3.02beta
# prices from advanced attribute field didn't include shopper group discount, 
  when the price was set to a fixed price ( Color,blue,green[=45.00]; )
# dtree module crashed - missing global $db declaration

14-10-2005 soeren
# On registration an error from the Joomla registration function would empty all fields
+ added new Version check link to admin section
# keyword length is restricted to 50 from now on (security), prevents 10000 characters long keyword via URL 

12-10-2005 soeren
# wz_tooltip.js is included now whenever mm_ToolTip was called
^ The registration & billto form have been completely rewritten
	The are built out of a loop now, that runs through an array with all fields and 
	marks required fields. This prepares the integration of	a form & field management 
	component! You can already now easily re-arrange the fields by changing their order.
+ Added complete JS validation to the registration / billto forms
	Uses vmCommonHTML::printJS_formvalidation() to print a JS form validation function
	
11-10-2005 soeren
# fixed a bug in the shopper-registration of a registered user
+ added SwitchCard support to CC numbers validation

10-10-2005 soeren
^ moved to class vmInputFiler to prevent SQL injection
	(we always had our own basic protection against that, but vmInputFilter was especially made for that)
	To secure a variable just use $variable = $vmInputFilter->safeSQL( $variable );
# fixed a dumb bug in the function ps_product_attributes::cartGetAttributes
	(allowed to add products without choosing attributes)
^ moved ACL code for 'show_prices' authentication into ps_perm::prepareACL()
^ moved cart initialization code into a new constructor for ps_cart
^ moved Session initialization code into ps_session::initSession(); a new constructor calls this on class instantiation

09-10-2005 soeren
+ new Configuration parameter VM_SILENT_REGISTRATION
	allows users to "silently" register into Mambo/Joomla
	means they don't have to fill in a username and password at the registration.
! you can use the configuration panel to set this value; default: 1 (=enabled)

08-10-2005 soeren
+ added new configuration parameter VM_PRICE_ACCESS_LEVEL
	The value is the name of a Joomla user group, default: "Public Frontend"
	It can be used to restrict the price display to certian membergroups (including their childs)
+ added new configuration parameter VM_PRICE_SHOW_INCLUDINGTAX
	A flag to turn on or off the message (including 8.5% tax) behind a price display
+ added new configuration parameter VM_PRICE_SHOW_PACKAGING_PRICELABEL
	A flag to switch between usual price labels or packaging price labels (which are used, when Packaging Units are set)
^ re-arranged fields in the configuration panel

07-10-2005 soeren
+ new function vmPopupLink to quickly generate a JS + XHTML compliant link
# TopTen module optimized (ran 11 queries before on 10 products, now ONE)

06-10-2005 soeren
^ updated the PayPal Form Code according to this post (http://mambo-phpshop.net/index.php?option=com_smf&Itemid=71&topic=11167.msg21226#msg21226)

06-10-2005 schirmer
# tax list optional with onChange field. product_form automatically edits the price fields if tax is changed.
# public frontend fixed. New menu buttons didn't send admin state pshop_mode variable.

06-10-2005 schirmer
# typos in install script
# missing / in dummy phpshop file

05-10-2005 soeren
+ added new product discount "overrides" to the product form which can be used to
	fill in a discounted end user price, from which a discount will be calculated and added to the product discount list
# fixed a bug in install.php
+ added a new CVS module 'build_scripts', so you can build your installers


04-10-2005 soeren
^ moved the Shipping Rates and Carriers of the standard shipping module into sample data file
^ the class ps_user registers users into VirtueMart (function for admins!)
^ the class ps_shopper registers Shoppers into VirtueMart (function add for Shoppers)
^ Changed the registration process to use the registration component of Mambo/Joomla
- file shop.registration.php
! User Management no longer uses modified Mambo files, but includes needed functions.
- file admin.users.html.php

04-10-2005 schirmer
^ Updated Montrada payment class for VirtueMart
# Minor fix in url generation in ps_session. If option is specified com_virtuemart will not be appended.
# Category count now displays correct count for vendors
# Error messages from ps_product now are space seperated for better readability

01-10-2005 soeren
- Removed many fields from the table jos_vm_modules which are not longer necessary (and were actually never needed)
! Updated all SQL files and the Installation script
! Beginning to change the code to not to use mos_users table for customer information
! ### Database Structure Changes ### ! 
	Details: /sql/UPDATE-SCRIPT_mambo-phpshop_1.2_stable-pl3_to_VirtueMart_1.0.sql

^ Changed all tooltips to use wz_tooltip, this gives always working tooltips - even on tabbed forms
+ added JS ToolTip by Walter Zorn to VirtueMart


30-09-2005 schirmer
# frontend administration can't load page
# missing pshop_mode=admin in inventory for links
# ps_affiliate undefined index afid on checkout in register_sale function
^ list_year in ps_html changed to dynamic year list
# store.index only shows apropriate options and information. no links to unusable modules or non-vendor specific stats
# fixed duplicate files listed on flypage

29-09-2005
- updated all files to use com_virtuemart as path
- updated all queries to use {vm} as shop table prefix
- Changed $PHPSHOP_LANG to $VM_LANG
- fixed product file listing
- renamed *phpshop*.php to *virtuemart*.php
- added "update to virtuemart" routines to install.php

27-09-2005
- Domit! libraries are not longer included in VirtueMart, Mambo provides them
# WYSIWYG Editor not loading in frontend admin
^ Frontend Administration uses the backend toolbar now (shared administration)
^ changed the file headers of all files to carry the new name (VirtueMart) and a copyright notice

26-09-2005 soeren
# fixed the "product inventory" and "special products" list

25-09-2005 soeren
! configuration constant SEARCH_ROWS (deprecated) is to be replaced by $mosConfig_list_limit
- removed Mail configuration from configuration form (dropping support for Mambo < 4.5.1 )
- removed configuration constant MAX_ROWS.
^ changed the configuration file (virtuemart.cfg.php) to build URLs and Paths from Mambo configuration variables
  This means that you don't have to adjust your configuration file when moving a site.
^ updated all forms to use the new formFactory class and it's methods
+ new class formFactory for managing common form tasks in all administration forms in virtuemart

18-09-2005 soeren
^ Language files are updated. Language Strings can be returned as HTML Entity-encoded Strings.
	* class vmAbstractLanguage is the base class for all language files.
	* function _() returns an html entity-encoded string
! language classes extend class vmAbstractLanguage from now on. mosAbstractClass is deprecated.
- file mos_4.6_code.php will be removed.
	* vmAbstractLanguage & mosAbstractLanguage class moved into language.class.php
	* mosMailer / mosCommonHTML compat code moved into ps_main.php

13-09-2005 soeren
+ changed the product files list to show images in a tooltip
# added code to prevent that manufacturers are deleted which still have products assigned to it
# changed virtuemart_parser.php not to be greedy on variables when $option is NOT "com_virtuemart"
	this should fix conflicts with variables of the same name used by other components
^ Updated the toolbar to allow batch delete / (un)publishing of items in lists
^ Changed complete page navigation to Mambo style (also remembers list positions!)
# Product Quantity wasn't updated in cart when adding the same product again
! functions search_header and search_footer will be removed. Don't use them. Use the class listFactory and its methods instead.
^ changed all shop administration lists to use the new class listFactory. No more HTML Code in those lists!
+ added new file "htmlTools.class.php" containing a listFactory for admin lists
+ added new file "pageNavigation.class.php" (copy of the administrator/includes/pageNavigation.php)
+ added new file "/js/functions.js" for JS functions in the administration area

06-09-2005 soeren
^ mod_virtuemart: changed the default value for "Pre-Text" to "" (empty!)
# product search not handling keywords as separate search words, but as one (normal search)

01-09-2005 soeren

+ added a CSS file called shop.css to /css: will control all shop specific layout in the future
^ moved some program logic from virtuemart_parser.php to their appropriate classes


31-08-2005 soeren
# products with a single quote (') didn't have a visible product image
^ upated the CSV documentation
^ product form: moved the discount drop-down list to product information tab
	added a check to test if the IMAGEPATH is writable (see Tab "product images")
# Custom Attribute Values would allow the customer to alter the product price (thanks to "Ary Group", AryGroup@ua.fm for reporting that)

=======
26-08-2005 Zdenek Dvorak
+ Now is possible use EXTRA FIELDS in user_info. Just set variable _PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_X (where X is from 1 to 5)
  in language file and new input field will be shown in user's billing and shipping address form and in order details. Size of 
  extra field 1, 2 and 3 is 255 chars. Size of extra field 4 and 5 is one char and they are shown as input select field.
  For reasonable using extra field 4 and 5 is needed change items of input select in functions list_extra_field_4 
  and list_extra_field_5 in file classes/ps_html.php.
  You can change position of this fields in form in files: account.shipto.php account.billing.php account.order_details.php 
  admin.users.html.php admin.user_address_form.php
+ User info in order includes EXTRA FIELDS. ## REQUIRES a DATABASE UPDATE! ##
^ ## Database structure changed ##
  ALTER TABLE mos_{vm}_order_user_info ADD  `extra_field_1` varchar(255) default NULL;
  ALTER TABLE mos_{vm}_order_user_info ADD  `extra_field_2` varchar(255) default NULL;
  ALTER TABLE mos_{vm}_order_user_info ADD  `extra_field_3` varchar(255) default NULL;
  ALTER TABLE mos_{vm}_order_user_info ADD  `extra_field_4` char(1) default NULL;
  ALTER TABLE mos_{vm}_order_user_info ADD  `extra_field_5` char(1) default NULL;
+ New input field in user's shipping and billing address: phone_2
# wrong address_type in file account.shipto.php
# wrong $missing comparision for address_type_name in files account.shipto.php and admin.user_address_form.php
# showing $missing_style in file admin.user_address_form.php
# URL for editing shipping address in file admin.users.html.php
+ New variables in language file

12-08-2005 Zdenek Dvorak
+ New feature in backend: You can search products by:
  - modified date of product (You can search products which are very old and need update or which are new and need be checked)
  - modified date of product's price (Very usefull if you use price synchronizing with other system - e.g. company accountancy)
  - products with no price
+ New features: unit and packaging ## REQUIRES a DATABASE UPDATE! ##
  You can set unit of product, number units in packaging and number units in box. For showing packaging in product_details is
  needed use in flypage {product_packaging} - see html/templates/product_details/flypage.php
^ ## Database structure changed ##
  ALTER TABLE `mos_{vm}_product` ADD `product_unit` varchar(32);
  ALTER TABLE `mos_{vm}_product` ADD `product_packaging` int(11);
^ Now is possible set default product weight unit (pounds) and default product length unit (inches) in language file:
  var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM and var $_PHPSHOP_PRODUCT_FORM_LENGTH_UOM
+ New language file for Czech translation (czechiso.php with ISO-8859-2 and czech1250.php with CP1250 codepage)
+ New parameter for modul virtuemart: moduleclass_sfx

09-08-2005 Zdenek Dvorak
# bad showing last_page in cart and show error message if no product_id (no redirecting) (ps_cart.php)
# error message befor login to show account.order_details (ps_main.php)
# error message in no tax_rate (before show Shipping Address) (ps_product_attribute.php)
# bad redirecting if URL == SECUREURL (ps_session.php)
# vertical aligning button "Add to Cart" (shop.product_details.php)

02-08-2005 soeren
# categories from the category list were not shown in the list under some circumstances
# Slashes were stripped out of text when saving a payment method (extrainfo)
^ moved the SQL Queries out of the file shop.browse.php into shop_browse_queries.php

01-08-2005 Zdenek Dvorak
# Product Type: File mod_virtuemart.php, variable _PHPSHOP_PARAMETER_SEARCH was changed to _PHPSHOP_ADVANCED_PARAMETER_SEARCH 

26-07-2005
# Tax Total wasn't calculated correctly when MULTIPLE_TAXRATES_ENABLE was set to 1 and a disount was applied
# Product Discounts weren't calculated correctly when PAYMENT_DISCOUNT_BEFORE was enabled (ps_product::get_advanced_attribute_price())
# basket.php didn't calculate the correct Tax Amount when a Coupont has been redeemed
# Coupon Discount wasn't calculated correctly (when Percentage) - ps_coupon::process_coupon_code()
# Quantity Discounts didn't show the correct price in the basket (ps_product::get_price())
# Related Products couldn't be changed in Product Form
^ more changes for Mambelfish compatiblity (added product_id / category_id to various SQL queries)

19-07-2005 soeren
# Tax Rate for other states didn't return 0 when no tax rate was specified
# Report Basic Module doing an endless loop when showing single products
# Product Form always displaying the name of the first Shopper Group, not saving the price to the correct shopper group
+ CSV: Added the "Skip the first line" feature by Christian Lehmann (thanks!)
  so you can just keep the column names in the first line of the CSV file

01-07-2005 Zdenek Dvorak
! changed ToolTip in files ps_product_type.php, shop.parameter_search_form.php, product.product_form.php and
  product.product_type_parameter_form.php
  Now is used function mm_ToolTip.
  
^ changed the PNG Fix to this solution: http://www.skyzyx.com/scripts/sleight.php
  (this doesn't let images disappear)

27-06-2005 soeren
# Checkout not working (Minimum Purchase Order Value not reached)

---- derived from mambo-phpShop 1.2 stable - patch level 3 ----

---- mambo-phpShop 1.2 stable patch level 3 released ----


</pre>
