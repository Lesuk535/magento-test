define([
        "jquery"
    ], function($){
        "use strict";
        return function(config, element) {
            if (window.PasswordCredential || window.FederatedCredential) {
                if (!user.isSignedIn()) {
                    navigator.credentials.get({
                        password: true,
                        federated: {
                            providers: [
                                'https://accounts.google.com',
                                'https://www.facebook.com'
                            ]
                        },
                        mediation: 'silent'
                    }).then(c => {
                        if (c) {
                            switch (c.type) {
                                case 'password':
                                    return sendRequest(c);
                                    break;
                                case 'federated':
                                    return gSignIn(c);
                                    break;
                            }
                        } else {
                            return Promise.resolve();
                        }
                    }).then(profile => {
                        if (profile) {
                            updateUI(profile);
                        }
                    }).catch(error => {
                        showError('Sign-in Failed');
                    });
                }
            }
        }
    }
);
