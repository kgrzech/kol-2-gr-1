Feature: Fikstury dla tabeli antybiotic

  Scenario: Lista fixtur z tabeli antybiotic
    Given I am on "antybiotics.html"
     Then I should see "Amikacin"
      And I should see "Aminoglycosides"
     Then I should see "Geldanamycin"
      And I should see "Ansamycins"
     Then I should see "Loracarbef"
      And I should see "Carbacephem"