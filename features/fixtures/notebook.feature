Feature: Fikstury dla tabeli notebook

  Scenario: Lista fixtur z tabeli notebook
    Given I am on "notebooks.html"
     Then I should see "MSI"
      And I should see "3600"
     Then I should see "Samsung"
      And I should see "3400"
     Then I should see "Asus"
      And I should see "2500"