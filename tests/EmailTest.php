<?php

it('can validate syntactically valid email', function () {
    $email = new EmailReputationAPI\Reputation\Email();
    $response = $email->validate('hello@gmail.com');
    
    expect($response->syntax)->toBe('valid');
});

it('can identify remailer email', function () {
    $email = new EmailReputationAPI\Reputation\Email();
    $response = $email->validate('hello@sharklasers.com');
    
    expect($response->disposable)->toBe('true');
});