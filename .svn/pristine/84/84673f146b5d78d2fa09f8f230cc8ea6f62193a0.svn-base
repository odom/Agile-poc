Feature: Provide multiple languages for visitors
  In order to reach international visitors
  As a website owner
  I want to support two languages: English and Khmer
  And I want English to be the default language
  In order to handle Western and non Western languages
  TYPO3 will be set up for Western and non Western languages

  Redmine #5673

  Scenario: All supported languages are shown
    Given I am on "homepage"
    Then I should see "English" within "#lang-nav"
    And I should see "Khmer" within "#lang-nav"
  
   Scenario: English is defualt laguage 
      Given I am on "homepage"t
      Then I should see "en" within "html"
 
    Scenario: Khmer language 
       Given I am on "home"
       When I follow "Khmer"
       Then I should not see "kh"
      

 # Scenario: Menu items change in each language
  #  Given I am on homepage
   # When I follow "ភាសាខ្មែរ" within "#lang_menu"
   # Then I should see "ភាសាខ្មែរ" within "#lang_menu"

  #Scenario: The site works in khmer
   # Given I am on homepage
   # Then I should see "ភាសាខ្មែរ" within "#lang_menu"
    #When I follow "ភាសាខ្មែរ" within "#lang_menu"
    #Then I should see "ឯកសណ្ឋាន" within "#main_menu"
