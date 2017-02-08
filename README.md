# Project 2 - Input/Output Sanitization

## User Stories

The following **required** functionality is completed:

1\. [X]  Required: Import the Starting Database

2\. [X]  Required: Set Up the Starting Code

3\. [X]  Required: Review code for Staff CMS for Users

4\. [X]  Required: Complete Staff CMS for Salespeople
  * [X]  Required: index.php
  * [X]  Required: show.php
  * [X]  Required: new.php
  * [X]  Required: edit.php

5\. [X]  Required: Complete Staff CMS for States
  * [X]  Required: index.php
  * [X]  Required: show.php
  * [X]  Required: new.php
  * [X]  Required: edit.php

6\. [X]  Required: Complete Staff CMS for Territories
  * [X]  Required: index.php
  * [X]  Required: show.php
  * [X]  Required: new.php
  * [X]  Required: edit.php

7\. [X]  Required: Add Data Validations
  * [X]  Required: Validate that no values are left blank.
  * [X]  Required: Validate that all string values are less than 255 characters.
  * [X]  Required: Validate that usernames contain only the whitelisted characters.
  * [X]  Required: Validate that phone numbers contain only the whitelisted characters.
  * [X]  Required: Validate that email addresses contain only whitelisted characters.
  * [X]  Required: Add *at least 5* other validations of your choosing.

8\. [X]  Required: Sanitization
  * [X]  Required: All input and dynamic output should be sanitized.
  * [X]  Required: Sanitize dynamic data for URLs
  * [X]  Required: Sanitize dynamic data for HTML
  * [X]  Required: Sanitize dynamic data for SQL

9\. [X]  Required: Penetration Testing
  * [X]  Required: Verify form inputs are not vulnerable to SQLI attacks.
  * [X]  Required: Verify query strings are not vulnerable to SQLI attacks.
  * [X]  Required: Verify form inputs are not vulnerable to XSS attacks.
  * [X]  Required: Verify query strings are not vulnerable to XSS attacks.
  * [X]  Required: Listed other bugs or security vulnerabilities


## Video Walkthrough

Here's a walkthrough of implemented user stories:
<br>
<br>
<b>1. Sanitization of HTML output, MySQL string escape</b><br><br>
<img src='http://i.imgur.com/daPeyD9.gif?1' title='Video Walkthrough 1' width='' alt='Video Walkthrough 1' />
<br>
<b>2. Sanitization of form input and output for XSS and SQLI vulnerability</b><br><br>
<img src='http://i.imgur.com/30IoDJI.gif?1' title='Video Walkthrough 2' width='' alt='Video Walkthrough 2' />
<br>
<b>3. Sanitization of query for XSS and SQLI vulnerability</b><br><br>
<img src='http://i.imgur.com/liBJdDi.gif?1' title='Video Walkthrough 3' width='' alt='Video Walkthrough 3' />



GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright 2017 tessav

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
