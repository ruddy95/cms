<?php
namespace App\Model\Validation;
use Cake\Validation\Validation;

/**
 * カスタムバリデーションサンプル
 */
class CustomValidation extends Validation {

  /**
   * 半角英数字バリデーション
   * @param type $check
   * @return type
   */
  public static function alphaNumericCustom($check) {
    return (bool) preg_match('/^[a-z\d]*$/i', $check);
  }
}
