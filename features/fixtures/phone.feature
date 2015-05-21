Feature: Fikstury dla tabeli phone

  Scenario: Lista fixtur z tabeli phone
    Given I am on "phone.html"
     Then I should see "Nokia"
      And I should see "500"
     Then I should see "Samsung"
      And I should see "600"
     Then I should see "HTC"
      And I should see "700"