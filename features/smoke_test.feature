Feature: Home page is shown
       In order to make sure that all pages are shown
       As website developer
       Should see all the page link 

  Scenario Outline: 
    Given I am on "home"
    Then I should see "<page>"
    
    Examples:
      | page         |
      | English      |
      | Khmer        |
      | Table        |
      | Detail       |
