Feature: Web pages

  Scenario: Sceneria YOLO
    Given I am on homepage
    When I follow "witaj YOLO"
    Then I should see "YOLO."