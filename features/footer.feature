Feature: Footer text
      In order to show the current year of the boxmodel
      As a website owner
      Should be able to see the current year
  
   Scenario: Footer year
      Given I am on "home"
      Then I should see "2011" within "#footer"
     # Then I should see not "2011" within "#footer"
