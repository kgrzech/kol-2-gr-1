Feature: Fikstury dla tabeli cars

  Scenario: Lista fixtur z tabeli cars
    Given I am on "cars.html"
     Then I should see "Honda"
      And I should see "30000"
     Then I should see "Audi"
      And I should see "40000"
     Then I should see "Saab"
      And I should see "50000"