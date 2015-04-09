Feature: Fikstury dla tabeli desert

  Scenario: Lista fixtur z tabeli desert
Given I am on homepage
    Then I should see "Desert"
     When I follow "Desert"
    Given I am on "desert.html"
     Then I should see "Gobi"
      And I should see "1295000"
     Then I should see "Takla Makan"
      And I should see "327000"
     Then I should see "Ar-Rub-al-Chali"
      And I should see "650000"