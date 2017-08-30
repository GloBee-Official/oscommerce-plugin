<?php

/**
 * The MIT License (MIT)
 * 
 * Copyright (c) 2011-2015 BitPay
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
 
// Text Messages
define('MODULE_PAYMENT_BITPAY_TEXT_TITLE', 'Bitcoin via GloBee');
define('MODULE_PAYMENT_BITPAY_TEXT_DESCRIPTION', 'Use globee.com\'s invoice processing server to automatically accept bitcoins.');
define('MODULE_PAYMENT_BITPAY_TEXT_EMAIL_FOOTER', 'You have attempted to make an order using bitcoins via globee.com!');

// Error Messages
define('MODULE_PAYMENT_BITPAY_BAD_CURRENCY', 'Currency not supported by globee.com.  Please choose another currency.');
define('MODULE_PAYMENT_BITPAY_CREATE_INVOICE_FAILED', 'Unable to process payment using GloBee.  Please choose another form of payment.');
