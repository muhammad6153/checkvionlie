<?php

//For Cache Clear
use Illuminate\Http\Request;

Route::get('/commands', function() {
    \Artisan::call('koderlabs:clear-everything');
    return \Artisan::output();
});

//For Developers "Sendgrid Emails" Routes
Route::get('dev/sendgrid/email', function () {

    try {
        config([
            'mail.mailers.smtp.host'       => 'smtp.sendgrid.net',
            'mail.mailers.smtp.port'       => '587',
            //'mail.mailers.smtp.username'   => 'Q5z4O-hxTJC2DdvICBJnVQ',
            //'mail.mailers.smtp.password'   => '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',
            'mail.mailers.smtp.username'   => 'SynergisticGolf',
            'mail.mailers.smtp.password'   => 'Federated1',
            'mail.mailers.smtp.encryption' => 'tls'
        ]);

        $subject = 'Resend your verify code - Verify Your Email';

        //\Mail::to($authenticate->email)->send(new ApiUserMail(  'verify-resent-register', $subject, $authenticate));

        $emails   = ['junaid.ahmed@koderlabs.com', 'junaid.kali@mailinator.com'];
        $subject  = 'You\'re almost there! Just confirm your email';

        foreach($emails as $email)
        {
            \Mail::raw( 'Hi, welcome user!', function( $message ) use ( $email, $subject ) {
                $message->to( $email )->subject( $subject );
                $message->from('info@sendgrid.com');
            });

            //\Mail::to( $email )->send( new \App\Mail\UserMail( 'verification', $subject, $customer ) );

            if (count(\Mail::failures()) > 0) {
                dd( \Mail::failures() );
            }
        }

        dump($emails);

    } catch( Exception $e ) {
        \Log::info( $e );
        dd( $e );
    }
});

