<?php

namespace App\Clients;

use Illuminate\Support\Facades\Http;

class Xero{

    const ID = '0A14ED6DDDCF44DEA9A1BC4D1D2FFBFC';
    const URL = 'https://api.xero.com/api.xro/2.0/Invoices';

    public static function push()
    {
        $pushdata = Http::post(self::URL,[
            "Id" => "110e6d73-b00c-46d2-92a4-a159439bd4cc",
            "Status" => "OK",
            "ProviderName" => "API Explorer",
            "DateTimeUTC" => "/Date(1621913973313)/",
            "Invoices" => [
                [
                    "Type" => "ACCREC",
                    "InvoiceID" => "ed9a2f00-f026-43d5-b3b7-ea2250d54729",
                    "InvoiceNumber" => "INV-0044",
                    "Reference" => "",
                    "Prepayments" => [],
                    "Overpayments" => [],
                    "AmountDue" => 8000.0,
                    "AmountPaid" => 0.0,
                    "SentToContact" => false,
                    "CurrencyRate" => 1.0,
                    "TotalDiscount" => 2000.0,
                    "IsDiscounted" => true,
                    "HasErrors" => false,
                    "Contact" => [
                        "ContactID" => "88c2ba44-ff72-4e88-b06a-fb760e65e94d",
                        "ContactStatus" => "ACTIVE",
                        "Name" => "ABC Limited",
                        "EmailAddress" => "",
                        "BankAccountDetails" => "",
                        "Addresses" => [
                            [
                            "AddressType" => "STREET",
                            "City" => "",
                            "Region" => "",
                            "PostalCode" => "",
                            "Country" => "",
                            ],
                            [
                            "AddressType" => "POBOX",
                            "City" => "",
                            "Region" => "",
                            "PostalCode" => "",
                            "Country" => "",
                            ]
                        ],                    
                        "Phones" => [
                            [
                            "PhoneType" => "DEFAULT",
                            "PhoneNumber" => "",
                            "PhoneAreaCode" => "",
                            "PhoneCountryCode" => "",
                            ],
                            [
                            "PhoneType" => "DDI",
                            "PhoneNumber" => "",
                            "PhoneAreaCode" => "",
                            "PhoneCountryCode" => "",
                            ],
                            [
                            "PhoneType" => "FAX",
                            "PhoneNumber" => "",
                            "PhoneAreaCode" => "",
                            "PhoneCountryCode" => "",
                            ],
                            [
                            "PhoneType" => "MOBILE",
                            "PhoneNumber" => "",
                            "PhoneAreaCode" => "",
                            "PhoneCountryCode" => "",
                            ]
                        ],
                        "UpdatedDateUTC" => "/Date(1621913460670+0000)/",
                        "ContactGroups" => [],
                        "IsSupplier" => false,
                        "IsCustomer" => true,
                        "SalesTrackingCategories" => [],
                        "PurchasesTrackingCategories" => [],
                        "ContactPersons" => [],
                        "HasValidationErrors" => false,
                    ],
                    "DateString" => "2009-05-27T00:00:00",
                    "Date" => "/Date(1243382400000+0000)/",
                    "DueDateString" => "2009-06-06T00:00:00",
                    "DueDate" => "/Date(1244246400000+0000)/",
                    "BrandingThemeID" => "7889a0ac-262a-40e3-8a63-9a769b1a18af",
                    "Status" => "DRAFT",
                    "LineAmountTypes" => "Exclusive",
                    "LineItems" => [
                    [
                        "Description" => "MFG XS21 (20% off standard rate)",
                        "UnitAmount" => 10000.0,
                        "LineAmount" => 8000.0,
                        "Tracking" => [],
                        "Quantity" => 1.0,
                        "DiscountRate" => 20.0,
                        "LineItemID" => "721054ff-a103-4761-a445-d7f9d866d087",
                        "DiscountEnteredAsPercent" => true,
                        "DiscountAmount" => 2000.0,
                        "ValidationErrors" => [],
                        ]
                    ],
                    "SubTotal" => 8000.0,
                    "TotalTax" => 0.0,
                    "Total" => 8000.0,
                    "UpdatedDateUTC" => "/Date(1621913973233+0000)/",
                    "CurrencyCode" => "NZD",
                    "Warnings" => [
                        [
                        "Message" => "Account code 201 has been removed as it does not match a recognised account.",
                        ]
                    ]
                ]
            ]
        ]);
    }
}