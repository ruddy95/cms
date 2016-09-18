<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
// カスタムバリデーション設定
// 書き方は「$validator->provider('プロバイダのキー', 'カスタムバリデーションのパス');」です。
        $validator->provider('ProviderKey', 'App\Model\Validation\CustomValidation');

        return $validator
            ->notEmpty('username', 'ユーザ名が入力されていません')
            ->notEmpty('password', '新しいパスワードを入力してください')
            ->add('password', 'alphaNumeric', [
                'rule' => ['alphaNumericCustom'],
                'provider' => 'ProviderKey',   // カスタムバリデーション設定で書いたプロバイダのキーを入れます。
                'message' => '半角英数で入力してください',
            ])
            ->notEmpty('password_confirm', 'Plese confirm new password')
            ->add('password_confirm', 'alphaNumeric', [
                'rule' => ['alphaNumericCustom'],
                'provider' => 'ProviderKey',   // カスタムバリデーション設定で書いたプロバイダのキーを入れます。
                'message' => '半角英数で入力してください',
            ])
            ->add('password_confirm', [
                // 新しいパスワードが一致するかどうか
                'comWith' => [
                    'rule' => ['comparewith', 'password'],
                    'message' => '同一のパスワードを入力してください',
                  ],
            ])
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Please enter a valid role'
            ]);
    }

}
