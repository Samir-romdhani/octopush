var octopush = require('octopush');

module.exports = {
    user_login: 'romdhanisamir94@gmail.com',
    api_key: '71ZuZ79cqmMLRr2b4PL9OknK20JkC9xl',
    sms_recipients: ['+21650086227'],
    sms_text: 'test text ' + (new Date()).getYear() + '-' + ((new Date()).getMonth() + 1) + '-' + (new Date()).getDay(),
    sms_type: octopush.constants.SMS_WORLD,
    sms_sender: 'onesender'
};