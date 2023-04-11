<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Matea Milloshi (mm2654)</td></tr>
<tr><td> <em>Generated: </em> 4/10/2023 10:41:25 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mm2654" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231009305-e3e076cd-0d3c-44e0-a1aa-7e9dc979ad5a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231009359-e93fee3c-76a7-42fe-a16d-218fb62f252c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231009444-73ed7740-09e9-434a-9010-29bbf5ff1cf9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show passwords not much validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231009525-579ae45f-73d1-4823-8352-d6bd951e29b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email not available validation (already registered)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231009584-696dd1c3-d43a-4649-b36c-8fe35b6bcf38.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username not available validation (username is taken)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231008906-da5d2ae3-ee8b-453c-99a6-ca629515d785.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231009956-a83a39ae-f36e-452c-9c2b-8f4eeface180.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table with data in it / he valid user data from Task<br>1 are be present in this screenshot. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/15">https://github.com/mateamilloshi/IT202-008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">The form is designed to<br>register a new user. When the user submits the form by clicking on<br>the "Register" button, the form data is submitted via POST to the same<br>PHP script that generates the form.&nbsp;<o:p></o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">The PHP script first checks if the form has been submitted by checking<br>if the email, password, and confirm fields have been set in the $_POST<br>superglobal array. If they are set, it then sanitizes the input data, validates<br>it, and stores it in variables.&nbsp;<o:p></o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">If any validation errors occur, the script sets a flash message and redirects<br>back to the form page, displaying the flash message. Otherwise, it inserts the<br>new user into the database and sets a success flash message.&nbsp;<o:p></o:p></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231010970-60a72ac1-4f5e-4aaa-9853-615bec206fad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch validation (doesn&#39;t match what&#39;s in the DB)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231012902-09e05387-84dc-4091-a379-dc1b1eaaae29.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231013243-6101487c-ae8a-4da5-babf-167a3ffffd0c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Should have some sort of message that a login occurred<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/15">https://github.com/mateamilloshi/IT202-008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p><font size="3">The form is handled using HTML. It contains two input fields, one<br>is for email/username and the other for the password. The form is submitted<br>using the POST method and validated on the client side using Javascript before<br>it is submitted to the server.&nbsp;</font><div><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">The frontend validation logic is implemented in the JavaScript function validate(form), which is<br>triggered when the user submits the form. This function checks if the email<br>and password fields are not empty, if the email is a valid email<br>address, and if the password meets the minimum length requirement. If any of<br>these conditions are not met, an alert message is displayed and the function<br>returns false, preventing the form from being submitted. If all conditions are met,<br>the function returns true, allowing the form to be submitted.&lt;o:p&gt;</o:p></p><p class="MsoNormal" style="margin: 0in;<br>font-family: Calibri, sans-serif;"><span style="font-size: medium;">The backend validation logic is implemented in the PHP<br>code that handles the form submission. First, the code checks if the email<br>and password fields are set and not empty. Then, it checks if the<br>email is a valid email address or a valid username. If</span><font size="3"> the<br>email is a valid email address, it is sanitized and validated using the<br>sanitize_email()&nbsp;and is_valid_email()&nbsp;&nbsp;functions, respectively. If the email is a valid username, it is validated<br>using the is_valid_username()&nbsp;function. Finally, the password is validated to ensure it is not<br>empty and meets the minimum length requirement using the is_valid_password()&nbsp;function.&nbsp;&lt;o:p&gt;</o:p></font></p><p class="MsoNormal" style="margin: 0in;<br>font-size: medium; font-family: Calibri, sans-serif;">In the frontend, the password input field has the<br>type=&quot;password&quot;&nbsp;attribute, which hides the password as it is being typed. Additionally, the password<br>field has a minlength=&quot;8&quot;&nbsp;&nbsp;attribute, which ensures that the password entered by the user<br>is at least 8 characters long.&lt;o:p&gt;</o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">In the backend, the password is stored securely in the database using the<br>password_hash()&nbsp;function, which uses a one-way hashing algorithm to convert the password into a<br>fixed-length hash. This makes it practically impossible to reverse-engineer the original password from<br>the hash.&lt;o:p&gt;</o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">When a user logs<br>in, their entered password is validated against the hashed password stored in the<br>database using the password_verify()&nbsp;function. This function takes the entered password and the hashed<br>password as arguments and returns true&nbsp;if the entered password matches the hashed password,<br>and false&nbsp;otherwise. This ensures that even if a malicious user gains access to<br>the database, they will not be able to see the actual passwords.&lt;o:p&gt;</o:p></p>&lt;p class=&quot;MsoNormal&quot;<br>style=&quot;margin: 0in; font-size: medium; font-family: Calibri, sans-serif;&quot;&gt;To retrieve the user data from the<br>database the PHP code uses a SQL query that selects the user&#39;s information<br>based on their email/username. The password stored in the database is hashed, so<br>the code uses the password_verify() function to check if the password submitted by<br>the user matches the hashed password retrieved from the database. If the validation<br>is successful, the code retrieves additional information, such as the user&#39;s roles, from<br>the database before storing the user&#39;s data in the session.&lt;o:p&gt;</o:p></p></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231028947-494d3233-a7e2-4dc0-9902-af40cde675af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about being logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231029069-bff3145f-94e3-4d0e-a753-ebdfaec4efa2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about not being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/31">https://github.com/mateamilloshi/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">The code starts a new<br>session using the session_start() function and then calls the reset_session() function, which clears<br>any session data that may exist.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">Next, a flash message is created using the flash() function to indicate that<br>the user has successfully logged out. The message is given a "success" status<br>so that it is displayed in a green color on the subsequent page.<o:p></o:p></p><p<br>class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">Finally, the user is redirected to<br>the login page using the header() function. This will ensure that any session<br>data is cleared and the user is logged out before being redirected to<br>the login page.<o:p></o:p></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231028333-aecc4bb7-ba45-4e70-952f-eb557d52a4b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about not being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231028553-b0d5d70f-75fa-41b0-b7e1-4ad4ee6491bb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about not having proper role or permission (i.e., different<br>than the not logged in message)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231015674-2bf06700-dc99-4970-bdb5-25939ce3675d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of the Roles table with valid data / Must have at<br>least one valid record from the lessons (i.e., Admin)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231015854-86a76605-7585-4752-b925-92230444d3d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of the UserRoles table with valid data / user if: 4<br>is admin as he has id 1 which is admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/30">https://github.com/mateamilloshi/IT202-008/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">The session_start() function is called<br>at the beginning of the PHP code to start a new or resume<br>an existing session. The $_SESSION superglobal&nbsp;</p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">array is used to store data that is specific to the current user's<br>session.<o:p></o:p></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">Sessions are used to maintain<br>state information between multiple HTTP requests from the same client. Sessions are used<br>to keep track&nbsp;</p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">of user authentication<br>state.&nbsp;</p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">The flash() function is a<br>helper function that stores a message in the session.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in; font-size:<br>medium; font-family: Calibri, sans-serif;">Other helper functions used in the session include reset_session(), which<br>clears all session data and starts a new session, and get_username(),&nbsp;</p><p class="MsoNormal" style="margin:<br>0in; font-size: medium; font-family: Calibri, sans-serif;">which retrieves the username from the session data.<o:p></o:p></p><p<br>class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;"><o:p></o:p></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231016247-ed7491aa-bad4-4ab0-bec7-f12663246606.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Navigation should be styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231016330-1cbea218-6092-4884-bdf9-f1563fdf1759.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Forms should be styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231021364-a7aee620-2a4b-47ec-a39c-3c8b66e543ba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UI should be clean and not have my &quot;hideous&quot; example CSS<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231021525-f00ee67e-b2b8-4852-acd4-f63ccd248021.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Data output should be in a clean manner (i.e., table, row/cols, list groups,<br>etc) Basically not exactly like dumped plaintext<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/16">https://github.com/mateamilloshi/IT202-008/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p class="MsoNormal" style="margin: 0in 0in 0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">For alerts<br>(success, warning, danger, info), background color and font-family is defined.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in<br>0in 0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">For navigation links (li a), display,<br>color, text-decoration, text-align, padding, font-weight, and font-size are defined.&nbsp;</p><p class="MsoNormal" style="margin: 0in 0in<br>0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">On hover, the background color changes to<br>#a85cff.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in 0in 0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">For the<br>body, background color and text-align are defined.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in 0in 0in 0.25in;<br>font-size: medium; font-family: Calibri, sans-serif;">For form labels (for email, pw, username, np, cp,<br>conp, name, d, confirm), font-weight and color are defined.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in 0in<br>0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">For table headers (th), font-weight and color<br>are defined.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in 0in 0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">For<br>the box element, width, border, padding, margin, background-color, and border-radius are defined.<o:p></o:p></p><p class="MsoNormal"<br>style="margin: 0in 0in 0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;">For submit button input,<br>margin-top and box-sizing are defined.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in 0in 0in 0.25in; font-size: medium;<br>font-family: Calibri, sans-serif;">For the h1 element, font-weight, color, and margin-left are defined.<o:p></o:p></p><p class="MsoNormal"<br>style="margin: 0in 0in 0in 0.25in; font-size: medium; font-family: Calibri, sans-serif;"><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231023581-f04411d1-6166-4bb8-ba72-b5dd1d53dea8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error example 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231023694-2324901e-f8f9-4c1d-98d4-6749dff11922.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error example 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231023929-d9d56b19-44e4-45b5-9045-dbc8f91e50ba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error example 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/18">https://github.com/mateamilloshi/IT202-008/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231024163-7d0039d3-d5fb-4c9d-bddb-b857ba640478.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshots of the User Profile page / Email and username should prefill properly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/19">https://github.com/mateamilloshi/IT202-008/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231024752-8728c957-2222-472b-bd80-8f8b2d5d2387.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231024946-55f6a9bd-b111-4b47-a6f8-d02443a80124.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231025163-ed3350df-d9a1-493b-bd28-ecb16976afb0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231025311-aca6aeec-182b-4c3f-a547-2b5fdd9e6593.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231026131-2e81b037-f1ad-42e4-85d5-e6be633083e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email/username already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231026959-49d1b7ba-a11c-4b21-a030-228f901a55a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before changes<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231027223-2a6a1af0-660e-410e-8436-0fb9093b0e73.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After changes<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mateamilloshi/IT202-008/pull/19">https://github.com/mateamilloshi/IT202-008/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">The script first includes the<br>"nav.php" file and calls the "is_logged_in" function, which checks if the user is<br>logged in and redirects them to the login page if not.</p><p class="MsoNormal" style="margin:<br>0in; font-size: medium; font-family: Calibri, sans-serif;"><o:p></o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">The script then checks if the "save" button has been pressed, and if<br>so, it retrieves the new email and username values from the form, sanitizes<br>and&nbsp;</p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">validates them, and updates the<br>corresponding user record in the database. It also checks if the user has<br>provided values for the "currentPassword", "newPassword", and "confirmPassword" fields, and if so, it<br>checks that the current password is valid, that the new password meets the<br>password policy requirements, and that the new password&nbsp;</p><p class="MsoNormal" style="margin: 0in; font-size: medium;<br>font-family: Calibri, sans-serif;">and confirmation password match. If all checks pass, the script updates<br>the user's password in the database.<o:p></o:p></p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri,<br>sans-serif;">The script then displays the form with the current user's email and username<br>values preloaded into the form fields. The form includes fields for updating the<br>user's&nbsp;</p><p class="MsoNormal" style="margin: 0in; font-size: medium; font-family: Calibri, sans-serif;">password, but the password values<br>are not preloaded into the form.<o:p></o:p></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/85270730/231032388-538ea626-75fd-4b82-82e5-b6fe0c41058a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots showing which issues are done/closed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/mateamilloshi/projects/1/views/2">https://github.com/users/mateamilloshi/projects/1/views/2</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mm2654-prod.herokuapp.com/Project/login.php">https://mm2654-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mm2654" target="_blank">Grading</a></td></tr></table>