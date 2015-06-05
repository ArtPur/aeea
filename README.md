# aeea
non-profit website
Web design

Index page of the website for a non-profit organisation.

Phase 1 The index page of the website. This front page has a svg map of Africa and once a guest clicks on a country on the map, the details and photo of the representative in that country is shown. A button is below the photo for a modal contact form or a slide out contact form.

The data on the page must dynamically update from the database on every mouse_click ie. use jquery AJAX Get command and json to get data from a mysql database.

The Regional representatives can also log in from this page via a slide down login.

Things to do : Phase 1 = aeeMap

  1. Get the AJAX to work and post country clicked to the database.
  2. Get data to display in the DOM once it is fetched from the database.
  3. Get the modal or slideout contact form to work.
  4. Modify the slide down login to change to an user admin section after login.

Phase 2 After login in. The Reps may only see and edit their own country data.

Things to do : Phase 2 = PHPRunner

  1. Make the Reps/users landing page
  2.  Make the add Reps form
  3.  Make the Reps editable grid view
  4.  Make the add School form
  5.  Make the School editable grid view
  6.  Make an admin portal where admin can view all data and edit reps details and communicate with reps.
  7.  Make a calendar to post country events per Rep.
  8.  Make a global calendar to post events for company.

Phase 3 This is a 'store locator' type of interface for every Representative. Again the reps may only access and edit their own countries data and map. The whole idea is to be able to view the schools under the regional representative and get data via a graphic interface. Blue tags for current schools and red tags for planned schools. Also to provide a method of placing tags in locations where no schools exist and do strategic planning to promote and market schools in that area. The Representative must be able to place a tag on a town and then enter details about that town in the form to the left.

Thing to do : Phase 3 = School finder

  1.  Make data table for planned school details
  2.  Research the best way to do this.
  3.  Look into google api and into zoom distance.
  4.  Still got to research so much of this
