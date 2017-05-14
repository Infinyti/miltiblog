Перейдите по данной ссылку, чтобы установить новый пароль: <a
        href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }}
</a>
