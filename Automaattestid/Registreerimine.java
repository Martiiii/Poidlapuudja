package com.example.tests;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class Registreerimine {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    driver = new FirefoxDriver();
    baseUrl = "http://poial.cs.ut.ee/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
  }

  @Test
  public void testRegistreerimine() throws Exception {
    driver.get(baseUrl + "/login");
    driver.findElement(By.xpath("//button[5]")).click();
    driver.findElement(By.id("kasutajanimi")).clear();
    driver.findElement(By.id("kasutajanimi")).sendKeys("Testkasutaja");
    driver.findElement(By.id("eesnimi")).clear();
    driver.findElement(By.id("eesnimi")).sendKeys("Test");
    driver.findElement(By.id("perenimi")).clear();
    driver.findElement(By.id("perenimi")).sendKeys("Kasutaja");
    driver.findElement(By.id("parool")).clear();
    driver.findElement(By.id("parool")).sendKeys("testkasutaja");
    driver.findElement(By.id("email")).clear();
    driver.findElement(By.id("email")).sendKeys("testkasutaja@hot.ee");
    driver.findElement(By.id("telnr")).clear();
    driver.findElement(By.id("telnr")).sendKeys("55123123");
    driver.findElement(By.id("regamisnupp")).click();
    try {
      assertEquals("Registreerimine õnnestus!", driver.findElement(By.xpath("//div/div/div/div")).getText());
    } catch (Error e) {
      verificationErrors.append(e.toString());
    }
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }

  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }
}
