Feature: Fikstury dla Japan

  Scenario: Lista fixtur z Japan
    Given I am on homepage
    Then I should see "Japan"
    When I follow "Japan"
     And I should see "13161751"
    Then I should see "Osaka"
     And I should see "2663096"
    Then I should see "Kawasaki"
     And I should see "1385003"