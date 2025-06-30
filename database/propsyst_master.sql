--
-- Table structure for table `accounts_bacs_file`
--

CREATE TABLE `accounts_bacs_file` (
  `bacs_file_id` int(11) NOT NULL,
  `bacs_file_destination_sort_code` varchar(6) DEFAULT NULL,
  `bacs_file_destination_account_number` varchar(8) DEFAULT NULL,
  `bacs_file_destination_account_type` varchar(1) NOT NULL DEFAULT ' ',
  `bacs_file_bacs_code` varchar(2) NOT NULL DEFAULT '99',
  `bacs_file_debit_sort_code` varchar(6) DEFAULT NULL,
  `bacs_file_debit_account_number` varchar(8) DEFAULT NULL,
  `bacs_file_free_format_text` varchar(4) NOT NULL DEFAULT '    ',
  `bacs_file_amount_pence` varchar(11) DEFAULT NULL,
  `bacs_file_amount` decimal(10,2) DEFAULT NULL,
  `bacs_file_originator_name` varchar(18) NOT NULL,
  `bacs_file_reference` varchar(18) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `bacs_file_invoice_payment_reference` int(11) DEFAULT NULL,
  `bacs_file_landlord_payment_reference` int(11) DEFAULT NULL,
  `bacs_file_destination_account_name` varchar(18) DEFAULT NULL,
  `bacs_file_processing_date` varchar(6) DEFAULT '      ',
  `bacs_file_directory_id` int(11) DEFAULT NULL,
  `bacs_file_payment_date` date DEFAULT NULL,
  `bacs_file_disbursement_DEL` tinyint(4) DEFAULT NULL,
  `bacs_file_nominal_code` smallint(6) DEFAULT NULL,
  `bacs_file_vat_rate` tinyint(4) DEFAULT NULL,
  `bacs_file_vat_amount` decimal(10,2) DEFAULT NULL,
  `bacs_file_exported` tinyint(1) NOT NULL DEFAULT 2,
  `bacs_file_date_created` datetime DEFAULT NULL,
  `bacs_file_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_deposit_action`
--

CREATE TABLE `accounts_deposit_action` (
  `deposit_action_id` int(11) NOT NULL,
  `deposit_action_name` varchar(150) DEFAULT NULL,
  `deposit_action_sort` tinyint(4) DEFAULT NULL,
  `deposit_action_archived` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice`
--

CREATE TABLE `accounts_invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_token` varchar(40) DEFAULT NULL,
  `invoice_customer_type` int(11) DEFAULT NULL,
  `invoice_customer` int(11) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_due_date` date DEFAULT NULL,
  `invoice_property_id` int(11) DEFAULT NULL,
  `invoice_development_id` int(11) DEFAULT NULL,
  `invoice_tenancy_id` int(11) DEFAULT NULL,
  `invoice_branch` int(11) DEFAULT NULL,
  `invoice_payment_terms` tinyint(4) DEFAULT NULL,
  `invoice_notes` text DEFAULT NULL,
  `invoice_total_amount_exc_vat` decimal(10,2) DEFAULT NULL,
  `invoice_total_vat_amount` decimal(10,2) DEFAULT NULL,
  `invoice_total_amount_paid` decimal(10,2) DEFAULT 0.00,
  `invoice_posted` tinyint(4) DEFAULT 0,
  `invoice_overdue_reminders` tinyint(4) NOT NULL DEFAULT 1,
  `invoice_date_created` datetime DEFAULT NULL,
  `invoice_date_updated` datetime DEFAULT NULL,
  `invoice_date_posted` datetime DEFAULT NULL,
  `invoice_created_by` int(11) DEFAULT NULL,
  `invoice_updated_by` int(11) DEFAULT NULL,
  `invoice_posted_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_credit`
--

CREATE TABLE `accounts_invoice_credit` (
  `invoice_credit_id` int(11) NOT NULL,
  `invoice_credit_token` varchar(40) DEFAULT NULL,
  `invoice_credit_customer_type` int(11) DEFAULT NULL,
  `invoice_credit_customer` int(11) DEFAULT NULL,
  `invoice_credit_date` date DEFAULT NULL,
  `invoice_credit_property_id` int(11) DEFAULT NULL,
  `invoice_credit_development_id` int(11) DEFAULT NULL,
  `invoice_credit_tenancy_id` int(11) DEFAULT NULL,
  `invoice_credit_branch` int(11) DEFAULT NULL,
  `invoice_credit_notes` text DEFAULT NULL,
  `invoice_credit_total_amount_exc_vat` decimal(10,2) DEFAULT NULL,
  `invoice_credit_total_vat_amount` decimal(10,2) DEFAULT NULL,
  `invoice_credit_posted` tinyint(4) DEFAULT 0,
  `invoice_credit_invoice_id` int(11) DEFAULT NULL,
  `invoice_credit_date_created` datetime DEFAULT NULL,
  `invoice_credit_date_updated` datetime DEFAULT NULL,
  `invoice_credit_date_posted` datetime DEFAULT NULL,
  `invoice_credit_created_by` int(11) DEFAULT NULL,
  `invoice_credit_updated_by` int(11) DEFAULT NULL,
  `invoice_credit_posted_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_credit_line`
--

CREATE TABLE `accounts_invoice_credit_line` (
  `invoice_credit_line_id` int(11) NOT NULL,
  `invoice_credit_id` int(11) DEFAULT NULL,
  `invoice_credit_line_description` text DEFAULT NULL,
  `invoice_credit_line_amount` decimal(10,2) DEFAULT NULL,
  `invoice_credit_line_vat_rate` tinyint(4) DEFAULT NULL,
  `invoice_credit_line_vat_amount` decimal(10,2) DEFAULT NULL,
  `invoice_credit_line_nominal_code` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_line`
--

CREATE TABLE `accounts_invoice_line` (
  `invoice_line_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `invoice_line_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `invoice_line_amount` decimal(10,2) DEFAULT NULL,
  `invoice_line_vat_rate` tinyint(4) DEFAULT NULL,
  `invoice_line_vat_amount` decimal(10,2) DEFAULT NULL,
  `invoice_line_nominal_code` smallint(6) DEFAULT NULL,
  `invoice_line_works_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_line_description`
--

CREATE TABLE `accounts_invoice_line_description` (
  `invoice_line_description_id` tinyint(4) NOT NULL,
  `invoice_line_description_name` varchar(255) DEFAULT NULL,
  `invoice_line_description_sort` tinyint(4) DEFAULT NULL,
  `invoice_line_nominal_code` smallint(6) DEFAULT NULL,
  `invoice_line_description_category` tinyint(4) DEFAULT NULL,
  `invoice_line_description_amount` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_line_description_category`
--

CREATE TABLE `accounts_invoice_line_description_category` (
  `invoice_line_description_category_id` tinyint(4) NOT NULL,
  `invoice_line_description_category_name` varchar(30) DEFAULT NULL,
  `invoice_line_description_category_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_payment`
--

CREATE TABLE `accounts_invoice_payment` (
  `invoice_payment_id` int(11) NOT NULL,
  `invoice_payment_date` date DEFAULT NULL,
  `invoice_payment_amount` decimal(10,2) DEFAULT NULL,
  `invoice_payment_method` tinyint(4) DEFAULT NULL,
  `invoice_payment_invoice_id` int(11) DEFAULT NULL,
  `invoice_payment_notes` text DEFAULT NULL,
  `invoice_payment_type` tinyint(4) DEFAULT NULL,
  `invoice_payment_type_id` int(11) DEFAULT NULL,
  `invoice_payment_use_balance` tinyint(4) DEFAULT NULL,
  `invoice_payment_tenancy_id` int(11) DEFAULT NULL,
  `invoice_payment_date_created` datetime DEFAULT NULL,
  `invoice_payment_date_updated` datetime DEFAULT NULL,
  `invoice_payment_created_by` int(11) DEFAULT NULL,
  `invoice_payment_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_payment_type`
--

CREATE TABLE `accounts_invoice_payment_type` (
  `accounts_invoice_payment_type_id` tinyint(4) NOT NULL,
  `accounts_invoice_payment_type_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_recurring`
--

CREATE TABLE `accounts_invoice_recurring` (
  `invoice_recurring_id` int(11) NOT NULL,
  `invoice_recurring_invoice_id` int(11) DEFAULT NULL,
  `invoice_recurring_frequency` smallint(6) DEFAULT NULL,
  `invoice_recurring_frequency_unit` tinyint(4) DEFAULT NULL,
  `invoice_recurring_start_date` date DEFAULT NULL,
  `invoice_recurring_next_processing_date` date DEFAULT NULL,
  `invoice_recurring_suspended` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_invoice_status`
--

CREATE TABLE `accounts_invoice_status` (
  `invoice_status_id` tinyint(4) NOT NULL,
  `invoice_status_name` varchar(55) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_landlord_payment`
--

CREATE TABLE `accounts_landlord_payment` (
  `landlord_payment_id` int(11) NOT NULL,
  `landlord_payment_date` date DEFAULT NULL,
  `landlord_payment_tenancy_id` int(11) DEFAULT NULL,
  `landlord_payment_amount` decimal(10,2) DEFAULT NULL,
  `landlord_payment_method` tinyint(4) DEFAULT NULL,
  `landlord_payment_notes` text DEFAULT NULL,
  `landlord_payment_date_created` datetime DEFAULT NULL,
  `landlord_payment_date_updated` datetime DEFAULT NULL,
  `landlord_payment_created_by` int(11) DEFAULT NULL,
  `landlord_payment_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_nominal_code`
--

CREATE TABLE `accounts_nominal_code` (
  `nominal_code_id` smallint(6) NOT NULL DEFAULT 0,
  `nominal_code_name` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nominal_code_type` tinyint(4) DEFAULT NULL,
  `nominal_code_external_id` smallint(11) DEFAULT NULL,
  `nominal_code_default_vat_rate` tinyint(4) DEFAULT NULL,
  `nominal_code_archive` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_nominal_code_type`
--

CREATE TABLE `accounts_nominal_code_type` (
  `nominal_code_type_id` tinyint(4) NOT NULL,
  `nominal_code_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_payment_method`
--

CREATE TABLE `accounts_payment_method` (
  `payment_method_id` tinyint(4) NOT NULL,
  `payment_method_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_payment_term`
--

CREATE TABLE `accounts_payment_term` (
  `accounts_payment_term_id` tinyint(4) NOT NULL,
  `accounts_payment_term_description` text DEFAULT NULL,
  `accounts_payment_term_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_recurring_frequency_unit`
--

CREATE TABLE `accounts_recurring_frequency_unit` (
  `recurring_frequency_unit_id` tinyint(4) NOT NULL,
  `recurring_frequency_unit_name` varchar(20) DEFAULT NULL,
  `recurring_frequency_unit_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_temporary_income_type`
--

CREATE TABLE `accounts_temporary_income_type` (
  `temporary_income_type_id` tinyint(4) NOT NULL,
  `temporary_income_type_name` varchar(50) DEFAULT NULL,
  `temporary_income_type_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_charge`
--

CREATE TABLE `accounts_tenant_charge` (
  `tenant_charge_id` int(11) NOT NULL,
  `tenant_charge_token` varchar(40) DEFAULT NULL,
  `tenant_charge_date` date DEFAULT NULL,
  `tenant_charge_payment_terms` tinyint(4) DEFAULT NULL,
  `tenant_charge_due_date` date DEFAULT NULL,
  `tenant_charge_tenancy_id` int(11) DEFAULT NULL,
  `tenant_charge_notes` text DEFAULT NULL,
  `tenant_charge_total_amount_exc_vat` decimal(10,2) DEFAULT NULL,
  `tenant_charge_total_vat_amount` decimal(10,2) DEFAULT NULL,
  `tenant_charge_total_amount_paid` decimal(10,2) DEFAULT 0.00,
  `tenant_charge_branch` int(11) DEFAULT NULL,
  `tenant_charge_date_created` datetime DEFAULT NULL,
  `tenant_charge_date_updated` datetime DEFAULT NULL,
  `tenant_charge_created_by` int(11) DEFAULT NULL,
  `tenant_charge_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_charge_line`
--

CREATE TABLE `accounts_tenant_charge_line` (
  `tenant_charge_line_id` int(11) NOT NULL,
  `tenant_charge_id` int(11) DEFAULT NULL,
  `tenant_charge_line_type` tinyint(4) DEFAULT NULL,
  `tenant_charge_line_description` text DEFAULT NULL,
  `tenant_charge_line_amount` decimal(10,2) DEFAULT NULL,
  `tenant_charge_line_vat_rate` tinyint(4) DEFAULT NULL,
  `tenant_charge_line_vat_amount` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_charge_line_type`
--

CREATE TABLE `accounts_tenant_charge_line_type` (
  `tenant_charge_line_type_id` tinyint(4) NOT NULL,
  `tenant_charge_line_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_charge_payment`
--

CREATE TABLE `accounts_tenant_charge_payment` (
  `tenant_charge_payment_id` int(11) NOT NULL,
  `tenant_charge_payment_date` date DEFAULT NULL,
  `tenant_charge_payment_amount` decimal(10,2) DEFAULT NULL,
  `tenant_charge_payment_method` tinyint(4) DEFAULT NULL,
  `tenant_charge_payment_tenant_charge_id` int(11) DEFAULT NULL,
  `tenant_charge_payment_notes` text DEFAULT NULL,
  `accounts_tenant_charge_payment_type` tinyint(4) DEFAULT NULL,
  `tenant_charge_housing_benefit` tinyint(4) DEFAULT NULL,
  `tenant_charge_payment_date_created` datetime DEFAULT NULL,
  `tenant_charge_payment_date_updated` datetime DEFAULT NULL,
  `tenant_charge_payment_created_by` int(11) DEFAULT NULL,
  `tenant_charge_payment_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_charge_payment_type`
--

CREATE TABLE `accounts_tenant_charge_payment_type` (
  `accounts_tenant_charge_payment_type_id` tinyint(4) NOT NULL,
  `accounts_tenant_charge_payment_type_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_charge_recurring`
--

CREATE TABLE `accounts_tenant_charge_recurring` (
  `tenant_charge_recurring_id` int(11) NOT NULL,
  `tenant_charge_recurring_tenant_charge_id` int(11) DEFAULT NULL,
  `tenant_charge_recurring_tenancy_id` int(11) DEFAULT NULL,
  `tenant_charge_recurring_frequency` smallint(6) DEFAULT NULL,
  `tenant_charge_recurring_frequency_unit` tinyint(4) DEFAULT NULL,
  `tenant_charge_recurring_start_date` date DEFAULT NULL,
  `tenant_charge_recurring_end_date` date DEFAULT '0000-00-00',
  `tenant_charge_recurring_next_processing_date` date DEFAULT NULL,
  `tenant_charge_recurring_suspended` tinyint(4) DEFAULT NULL,
  `tenant_charge_recurring_date_created` datetime DEFAULT NULL,
  `tenant_charge_recurring_date_updated` datetime DEFAULT NULL,
  `tenant_charge_recurring_created_by` int(11) DEFAULT NULL,
  `tenant_charge_recurring_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_deposit_charge`
--

CREATE TABLE `accounts_tenant_deposit_charge` (
  `tenant_deposit_charge_id` int(11) NOT NULL,
  `tenant_deposit_charge_token` varchar(40) DEFAULT NULL,
  `tenant_deposit_charge_date` date DEFAULT NULL,
  `tenant_deposit_charge_payment_terms` tinyint(4) DEFAULT NULL,
  `tenant_deposit_charge_due_date` date DEFAULT NULL,
  `tenant_deposit_charge_amount` decimal(10,2) DEFAULT NULL,
  `tenant_deposit_charge_total_amount_paid` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tenant_deposit_charge_tenancy_id` int(11) DEFAULT NULL,
  `tenant_deposit_charge_notes` text DEFAULT NULL,
  `tenant_deposit_charge_branch` int(11) DEFAULT NULL,
  `tenant_deposit_charge_date_created` datetime DEFAULT NULL,
  `tenant_deposit_charge_date_updated` datetime DEFAULT NULL,
  `tenant_deposit_charge_created_by` int(11) DEFAULT NULL,
  `tenant_deposit_charge_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tenant_deposit_charge_payment`
--

CREATE TABLE `accounts_tenant_deposit_charge_payment` (
  `tenant_deposit_charge_payment_id` int(11) NOT NULL,
  `tenant_deposit_charge_payment_date` date DEFAULT NULL,
  `tenant_deposit_charge_payment_amount` decimal(10,2) DEFAULT NULL,
  `tenant_deposit_charge_payment_method` tinyint(4) DEFAULT NULL,
  `tenant_deposit_charge_payment_tenant_deposit_charge_id` int(11) DEFAULT NULL,
  `tenant_deposit_charge_payment_notes` text DEFAULT NULL,
  `tenant_deposit_charge_payment_date_created` datetime DEFAULT NULL,
  `tenant_deposit_charge_payment_date_updated` datetime DEFAULT NULL,
  `tenant_deposit_charge_payment_created_by` int(11) DEFAULT NULL,
  `tenant_deposit_charge_payment_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_transaction`
--

CREATE TABLE `accounts_transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_nominal_code` smallint(11) DEFAULT NULL,
  `transaction_type` tinyint(4) DEFAULT NULL,
  `transaction_customer_type` int(11) DEFAULT NULL,
  `transaction_customer` int(11) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `transaction_due_date` varchar(10) DEFAULT NULL,
  `transaction_reference` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `transaction_details` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `transaction_notes` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `transaction_property` int(11) DEFAULT NULL,
  `transaction_development` int(11) DEFAULT NULL,
  `transaction_tenancy` int(11) DEFAULT NULL,
  `transaction_branch` int(11) DEFAULT NULL,
  `transaction_debit` decimal(10,2) DEFAULT NULL,
  `transaction_credit` decimal(10,2) DEFAULT NULL,
  `transaction_status` tinyint(4) NOT NULL DEFAULT 1,
  `transaction_date_created` datetime DEFAULT NULL,
  `transaction_date_updated` datetime DEFAULT NULL,
  `transaction_created_by` int(11) DEFAULT NULL,
  `transaction_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_transaction_type`
--

CREATE TABLE `accounts_transaction_type` (
  `transaction_type_id` tinyint(4) NOT NULL,
  `transaction_type_name` varchar(150) DEFAULT NULL,
  `transaction_type_statement_name` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_vat_rate`
--

CREATE TABLE `accounts_vat_rate` (
  `vat_rate_id` tinyint(4) NOT NULL,
  `vat_rate_amount` decimal(4,2) DEFAULT NULL,
  `vat_rate_name` varchar(10) DEFAULT NULL,
  `vat_rate_description` varchar(20) DEFAULT NULL,
  `vat_rate_multiplier` decimal(4,2) DEFAULT NULL,
  `vat_rate_external_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `aea_postcodes`
--

CREATE TABLE `aea_postcodes` (
  `id` int(11) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `alarm_code`
--

CREATE TABLE `alarm_code` (
  `alarm_code_id` int(11) NOT NULL,
  `alarm_code_property` int(11) DEFAULT NULL,
  `alarm_code_code` varchar(10) DEFAULT NULL,
  `alarm_code_type` tinyint(4) DEFAULT NULL,
  `alarm_code_notes` text DEFAULT NULL,
  `alarm_code_date_added` date DEFAULT NULL,
  `alarm_code_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `alarm_code_development`
--

CREATE TABLE `alarm_code_development` (
  `alarm_code_id` int(11) NOT NULL,
  `alarm_code_development` int(11) DEFAULT NULL,
  `alarm_code_code` varchar(10) DEFAULT NULL,
  `alarm_code_type` tinyint(4) DEFAULT NULL,
  `alarm_code_notes` text DEFAULT NULL,
  `alarm_code_date_added` date DEFAULT NULL,
  `alarm_code_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `alarm_code_type`
--

CREATE TABLE `alarm_code_type` (
  `alarm_code_type_id` tinyint(4) NOT NULL,
  `alarm_code_type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `annual_leave_accrual_method`
--

CREATE TABLE `annual_leave_accrual_method` (
  `annual_leave_accrual_method_id` tinyint(4) NOT NULL,
  `annual_leave_accrual_method_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `annual_leave_years`
--

CREATE TABLE `annual_leave_years` (
  `annual_leave_years_year` year(4) NOT NULL,
  `annual_leave_years_statutory_entitlement_days` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `applicant_token` varchar(40) DEFAULT NULL,
  `applicant_type` tinyint(4) DEFAULT 1,
  `applicant_sub_type` int(11) DEFAULT NULL,
  `applicant_title` tinyint(4) DEFAULT NULL,
  `applicant_first_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_surname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_company_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_company_trading_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_phone_home` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_phone_work` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_phone_mobile` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_fax` varchar(255) DEFAULT NULL,
  `applicant_property_number_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_apartment_number_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_address_line_1` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_address_line_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_estonian_ci DEFAULT NULL,
  `applicant_suburb` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_town_city` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_postcode` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `applicant_country` int(11) DEFAULT NULL,
  `applicant_branch` int(11) DEFAULT NULL,
  `applicant_purchase_finance` tinyint(4) DEFAULT NULL,
  `applicant_purchase_type` tinyint(4) DEFAULT NULL,
  `applicant_purchase_chain` tinyint(4) DEFAULT NULL,
  `applicant_purchase_chain_status` tinyint(4) NOT NULL DEFAULT 4,
  `applicant_purchase_chain_notes` text DEFAULT NULL,
  `applicant_ftb` tinyint(4) DEFAULT NULL,
  `applicant_referral_solicitor` tinyint(4) DEFAULT NULL,
  `applicant_referral_solicitor_notes` text DEFAULT 'Nothing recorded.',
  `applicant_referral_mortgage` tinyint(4) DEFAULT NULL,
  `applicant_referral_mortgage_notes` text DEFAULT 'Nothing recorded.',
  `applicant_referral_valuation` int(11) DEFAULT NULL,
  `applicant_referral_valuation_notes` text DEFAULT 'Nothing recorded.',
  `applicant_cash_available` decimal(11,2) DEFAULT NULL,
  `applicant_mortgage_available` decimal(11,2) DEFAULT NULL,
  `applicant_pof_date_updated` date DEFAULT NULL,
  `applicant_source` tinyint(4) DEFAULT NULL,
  `applicant_lead_source` tinyint(4) DEFAULT NULL,
  `applicant_lead_source_notes` text DEFAULT NULL,
  `applicant_referral_valuation_closed` tinyint(1) NOT NULL DEFAULT 2,
  `applicant_referral_valuation_next_review_date` date NOT NULL DEFAULT '0000-00-00',
  `applicant_referral_valuation_next_review_notes` text DEFAULT NULL,
  `applicant_referral_mortgage_closed` tinyint(4) NOT NULL DEFAULT 2,
  `applicant_referral_mortgage_next_review_date` date NOT NULL DEFAULT '0000-00-00',
  `applicant_referral_mortgage_next_review_notes` text DEFAULT NULL,
  `applicant_rightmove_email_id` varchar(15) DEFAULT NULL,
  `applicant_negotiator` int(11) DEFAULT NULL,
  `applicant_date_created` datetime DEFAULT NULL,
  `applicant_date_updated` datetime DEFAULT NULL,
  `applicant_created_by` int(11) DEFAULT NULL,
  `applicant_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_chain_status`
--

CREATE TABLE `applicant_chain_status` (
  `applicant_chain_status_id` tinyint(4) NOT NULL,
  `applicant_chain_status_name` varchar(100) DEFAULT NULL,
  `applicant_chain_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_lead_source`
--

CREATE TABLE `applicant_lead_source` (
  `applicant_lead_source_id` tinyint(4) NOT NULL,
  `applicant_lead_source_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement`
--

CREATE TABLE `applicant_requirement` (
  `ar_id` int(11) NOT NULL,
  `ar_token` varchar(40) DEFAULT NULL,
  `ar_active` tinyint(4) DEFAULT NULL,
  `ar_applicant_id` int(11) NOT NULL DEFAULT 0,
  `ar_property_category` tinyint(4) DEFAULT NULL,
  `ar_property_availability` tinyint(4) DEFAULT NULL,
  `ar_property_type` int(11) DEFAULT NULL,
  `ar_property_min_price` int(11) DEFAULT NULL,
  `ar_property_max_price` int(11) DEFAULT NULL,
  `ar_property_min_bedrooms` tinyint(4) DEFAULT NULL,
  `ar_property_max_bedrooms` tinyint(4) DEFAULT NULL,
  `ar_property_furnished` tinyint(4) DEFAULT NULL,
  `ar_property_shared` tinyint(4) DEFAULT NULL,
  `ar_property_student` tinyint(1) DEFAULT NULL,
  `ar_position` text DEFAULT NULL,
  `ar_notes` text DEFAULT NULL,
  `ar_branch` int(11) DEFAULT NULL,
  `ar_date_created` datetime DEFAULT NULL,
  `ar_date_updated` datetime DEFAULT NULL,
  `ar_created_by` int(11) DEFAULT NULL,
  `ar_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement_feedback`
--

CREATE TABLE `applicant_requirement_feedback` (
  `applicant_requirement_feedback_id` int(11) NOT NULL,
  `applicant_requirement_feedback_ar_id` int(11) DEFAULT NULL,
  `applicant_requirement_feedback_arp_id` int(11) DEFAULT NULL,
  `applicant_requirement_feedback_public_notes` text DEFAULT NULL,
  `applicant_requirement_feedback_ptp` int(11) DEFAULT NULL,
  `applicant_requirement_feedback_private_notes` text DEFAULT NULL,
  `applicant_requirement_feedback_next_review_date` text DEFAULT NULL,
  `applicant_requirement_feedback_date_created` datetime DEFAULT NULL,
  `applicant_requirement_feedback_date_updated` datetime DEFAULT NULL,
  `applicant_requirement_feedback_created_by` int(11) DEFAULT NULL,
  `applicant_requirement_feedback_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement_filter_shared`
--

CREATE TABLE `applicant_requirement_filter_shared` (
  `applicant_requirement_filter_id` tinyint(4) NOT NULL,
  `applicant_requirement_filter_name` varchar(15) DEFAULT NULL,
  `applicant_requirement_filter_description` varchar(100) DEFAULT NULL,
  `applicant_requirement_filter_sort` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement_filter_student`
--

CREATE TABLE `applicant_requirement_filter_student` (
  `applicant_requirement_filter_id` tinyint(4) NOT NULL,
  `applicant_requirement_filter_name` varchar(15) DEFAULT NULL,
  `applicant_requirement_filter_description` varchar(100) DEFAULT NULL,
  `applicant_requirement_filter_sort` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement_properties`
--

CREATE TABLE `applicant_requirement_properties` (
  `arp_id` int(11) NOT NULL,
  `ar_id` int(11) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `arp_date_created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement_property_subtype`
--

CREATE TABLE `applicant_requirement_property_subtype` (
  `arps_id` int(11) NOT NULL,
  `ar_id` int(11) DEFAULT NULL,
  `ar_property_type_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirement_suburb`
--

CREATE TABLE `applicant_requirement_suburb` (
  `ars_id` int(11) NOT NULL,
  `ar_id` int(11) DEFAULT NULL,
  `ar_suburb_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_updates`
--

CREATE TABLE `applicant_updates` (
  `applicant_updates_id` int(11) NOT NULL,
  `applicant_updates_applicant_id` int(11) DEFAULT NULL,
  `applicant_updates_public_notes` text DEFAULT NULL,
  `applicant_updates_private_notes` text DEFAULT NULL,
  `applicant_updates_notify_applicant` tinyint(4) DEFAULT NULL,
  `applicant_updates_date_created` datetime DEFAULT NULL,
  `applicant_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `application_token` varchar(40) DEFAULT NULL,
  `application_property` int(11) DEFAULT NULL,
  `application_property_room` int(11) DEFAULT NULL,
  `application_move_in_date` date DEFAULT NULL,
  `application_length_of_stay` tinyint(4) DEFAULT NULL,
  `application_tenancy_length` smallint(6) DEFAULT NULL,
  `application_children` text DEFAULT NULL,
  `application_pets` text DEFAULT NULL,
  `application_moving_reason` text DEFAULT NULL,
  `application_notes` text DEFAULT NULL,
  `application_bank_name` tinyint(4) DEFAULT NULL,
  `application_bank_account_name` varchar(255) DEFAULT NULL,
  `application_bank_sort_code` varchar(8) DEFAULT NULL,
  `application_bank_account_number` varchar(8) DEFAULT NULL,
  `application_status` tinyint(4) NOT NULL DEFAULT 1,
  `application_status_reason` text DEFAULT NULL,
  `application_employee` int(11) DEFAULT NULL,
  `application_type` tinyint(4) DEFAULT NULL,
  `application_company_years_trading` smallint(6) DEFAULT NULL,
  `application_company_nature` varchar(255) DEFAULT NULL,
  `application_business_address_history` text DEFAULT NULL,
  `application_accountant_company_name` varchar(255) DEFAULT NULL,
  `application_accountant_title` tinyint(4) DEFAULT NULL,
  `application_accountant_first_name` varchar(255) DEFAULT NULL,
  `application_accountant_surname` varchar(255) DEFAULT NULL,
  `application_accountant_telephone_numbers` varchar(255) DEFAULT NULL,
  `application_accountant_email_address` varchar(255) DEFAULT NULL,
  `application_accountant_address_line_1` varchar(255) DEFAULT NULL,
  `application_accountant_address_line_2` varchar(255) DEFAULT NULL,
  `application_accountant_town_city` varchar(255) DEFAULT NULL,
  `application_accountant_post_code` varchar(8) DEFAULT NULL,
  `application_solicitor_company_name` varchar(255) DEFAULT NULL,
  `application_solicitor_title` tinyint(4) DEFAULT NULL,
  `application_solicitor_first_name` varchar(255) DEFAULT NULL,
  `application_solicitor_surname` varchar(255) DEFAULT NULL,
  `application_solicitor_telephone_numbers` varchar(255) DEFAULT NULL,
  `application_solicitor_email_address` varchar(255) DEFAULT NULL,
  `application_solicitor_address_line_1` varchar(255) DEFAULT NULL,
  `application_solicitor_address_line_2` varchar(255) DEFAULT NULL,
  `application_solicitor_town_city` varchar(255) DEFAULT NULL,
  `application_solicitor_post_code` varchar(8) DEFAULT NULL,
  `application_trade2_company_name` varchar(255) DEFAULT NULL,
  `application_trade2_title` tinyint(4) DEFAULT NULL,
  `application_trade2_first_name` varchar(255) DEFAULT NULL,
  `application_trade2_surname` varchar(255) DEFAULT NULL,
  `application_trade2_telephone_numbers` varchar(255) DEFAULT NULL,
  `application_trade2_email_address` varchar(255) DEFAULT NULL,
  `application_trade2_address_line_1` varchar(255) DEFAULT NULL,
  `application_trade2_address_line_2` varchar(255) DEFAULT NULL,
  `application_trade2_town_city` varchar(255) DEFAULT NULL,
  `application_trade2_post_code` varchar(8) DEFAULT NULL,
  `application_trade_company_name` varchar(255) DEFAULT NULL,
  `application_trade_title` tinyint(4) DEFAULT NULL,
  `application_trade_first_name` varchar(255) DEFAULT NULL,
  `application_trade_surname` varchar(255) DEFAULT NULL,
  `application_trade_telephone_numbers` varchar(255) DEFAULT NULL,
  `application_trade_email_address` varchar(255) DEFAULT NULL,
  `application_trade_address_line_1` varchar(255) DEFAULT NULL,
  `application_trade_address_line_2` varchar(255) DEFAULT NULL,
  `application_trade_town_city` varchar(255) DEFAULT NULL,
  `application_trade_post_code` varchar(8) DEFAULT NULL,
  `application_body_type` tinyint(4) DEFAULT NULL,
  `application_landlord_solicitor_company` int(11) DEFAULT NULL,
  `application_landlord_solicitor_company_individual` int(11) DEFAULT NULL,
  `application_tenant_solicitor_company` int(11) DEFAULT NULL,
  `application_tenant_solicitor_company_individual` int(11) DEFAULT NULL,
  `application_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `application_applicant_email_reminders` tinyint(4) NOT NULL DEFAULT 1,
  `application_holding_deposit_paid` tinyint(4) NOT NULL DEFAULT 2,
  `application_proceed` tinyint(1) DEFAULT 3,
  `application_can_physically_view` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_applicant`
--

CREATE TABLE `application_applicant` (
  `application_applicant_id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `application_applicant_type` tinyint(4) DEFAULT NULL,
  `application_homeowner` tinyint(1) DEFAULT NULL,
  `application_title` tinyint(4) DEFAULT NULL,
  `application_first_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `application_surname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `application_telephone_numbers` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `application_email_address` varchar(255) DEFAULT NULL,
  `application_dob` date DEFAULT NULL,
  `application_nationality` smallint(6) DEFAULT NULL,
  `application_nino` varchar(13) DEFAULT NULL,
  `application_address_line_1` varchar(255) DEFAULT NULL,
  `application_address_line_2` varchar(255) DEFAULT NULL,
  `application_town_city` varchar(255) DEFAULT NULL,
  `application_post_code` varchar(8) DEFAULT NULL,
  `application_employment_status` tinyint(4) DEFAULT NULL,
  `application_employment_nature` varchar(255) DEFAULT NULL,
  `application_income` decimal(10,2) DEFAULT NULL,
  `application_company_legal_name` varchar(255) DEFAULT NULL,
  `application_company_trading_name` varchar(255) DEFAULT NULL,
  `application_company_registration_number` varchar(10) DEFAULT NULL,
  `application_company_vat_registration_number` varchar(20) DEFAULT NULL,
  `application_company_title` tinyint(4) DEFAULT NULL,
  `application_company_first_name` varchar(255) DEFAULT NULL,
  `application_company_surname` varchar(255) DEFAULT NULL,
  `application_company_telephone_numbers` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `application_company_email_address` varchar(255) DEFAULT NULL,
  `application_company_ro_address_line_1` varchar(255) DEFAULT NULL,
  `application_company_ro_address_line_2` varchar(255) DEFAULT NULL,
  `application_company_ro_town_city` varchar(255) DEFAULT NULL,
  `application_company_ro_post_code` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_decline_reason`
--

CREATE TABLE `application_decline_reason` (
  `application_decline_reason_id` tinyint(4) NOT NULL,
  `application_decline_reason_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_guarantor`
--

CREATE TABLE `application_guarantor` (
  `application_guarantor_id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `application_guarantor_title` tinyint(4) DEFAULT NULL,
  `application_guarantor_first_name` varchar(30) DEFAULT NULL,
  `application_guarantor_surname` varchar(255) DEFAULT NULL,
  `application_guarantor_telephone_numbers` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `application_guarantor_email_address` varchar(255) DEFAULT NULL,
  `application_guarantor_address_line_1` varchar(255) DEFAULT NULL,
  `application_guarantor_address_line_2` varchar(255) DEFAULT NULL,
  `application_guarantor_town_city` varchar(255) DEFAULT NULL,
  `application_guarantor_post_code` varchar(8) DEFAULT NULL,
  `application_guarantor_homeowner` tinyint(1) DEFAULT NULL,
  `application_guarantor_dob` date DEFAULT NULL,
  `application_guarantor_nino` varchar(13) DEFAULT NULL,
  `application_guarantor_employment_status` tinyint(4) DEFAULT NULL,
  `application_guarantor_employment_nature` varchar(255) DEFAULT NULL,
  `application_guarantor_income` decimal(10,2) DEFAULT NULL,
  `application_guarantor_nationality` smallint(6) DEFAULT NULL,
  `application_guarantor_applicant_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_log_status`
--

CREATE TABLE `application_log_status` (
  `application_log_status_id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `application_status_old` tinyint(4) DEFAULT NULL,
  `application_status_new` tinyint(4) DEFAULT NULL,
  `application_updated_by` int(11) DEFAULT NULL,
  `application_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_status`
--

CREATE TABLE `application_status` (
  `application_status_id` tinyint(4) NOT NULL,
  `application_status_name` varchar(50) DEFAULT NULL,
  `application_status_sort` tinyint(4) DEFAULT NULL,
  `application_status_archived` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_task`
--

CREATE TABLE `application_task` (
  `application_task_id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `application_task_type` tinyint(4) DEFAULT NULL,
  `application_task_name` varchar(255) DEFAULT NULL,
  `application_task_status` tinyint(4) DEFAULT NULL,
  `application_task_completed_date` date DEFAULT NULL,
  `application_task_notes` text DEFAULT NULL,
  `application_task_notes_private` text DEFAULT NULL,
  `application_task_sort` tinyint(4) DEFAULT NULL,
  `application_task_landlord_notified` tinyint(4) DEFAULT NULL,
  `application_task_applicant_notified` tinyint(4) DEFAULT NULL,
  `application_task_date_updated` datetime DEFAULT NULL,
  `application_task_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_task_defaults`
--

CREATE TABLE `application_task_defaults` (
  `application_task_defaults_id` smallint(6) NOT NULL,
  `application_task_defaults_type` tinyint(4) DEFAULT NULL,
  `application_task_defaults_name` varchar(100) DEFAULT NULL,
  `application_task_defaults_status` tinyint(4) DEFAULT NULL,
  `application_task_defaults_notes` text DEFAULT NULL,
  `application_task_defaults_description` text DEFAULT NULL,
  `application_task_defaults_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_task_status`
--

CREATE TABLE `application_task_status` (
  `application_task_status_id` tinyint(4) NOT NULL,
  `application_task_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_task_type`
--

CREATE TABLE `application_task_type` (
  `application_task_type_id` tinyint(4) NOT NULL,
  `application_task_type_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_tenancy_length`
--

CREATE TABLE `application_tenancy_length` (
  `application_tenancy_length_id` tinyint(4) NOT NULL,
  `application_tenancy_length_name` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_type`
--

CREATE TABLE `application_type` (
  `application_type_id` tinyint(4) NOT NULL,
  `application_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `application_updates`
--

CREATE TABLE `application_updates` (
  `application_updates_id` int(11) NOT NULL,
  `application_updates_application_id` int(11) DEFAULT NULL,
  `application_updates_public_notes` text DEFAULT NULL,
  `application_updates_private_notes` text DEFAULT NULL,
  `application_updates_notify_landlord` tinyint(4) DEFAULT NULL,
  `application_updates_notify_applicant` tinyint(4) DEFAULT NULL,
  `application_updates_date_created` datetime DEFAULT NULL,
  `application_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` tinyint(4) NOT NULL,
  `bank_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE `body_type` (
  `body_type_id` tinyint(4) NOT NULL,
  `body_type_name` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_company_id` int(11) DEFAULT NULL,
  `branch_company_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `branch_sole_sale_fee` decimal(7,2) DEFAULT NULL,
  `branch_multi_sale_fee` decimal(7,2) DEFAULT NULL,
  `branch_sole_sale_fee_type` tinyint(4) DEFAULT NULL,
  `branch_multi_sale_fee_type` tinyint(4) DEFAULT NULL,
  `branch_sole_sale_fee_min_no_viewings` decimal(7,2) DEFAULT NULL,
  `branch_sole_sale_fee_min_with_viewings` decimal(7,2) DEFAULT NULL,
  `branch_multi_sale_fee_min_no_viewings` decimal(7,2) DEFAULT NULL,
  `branch_multi_sale_fee_min_with_viewings` decimal(7,2) DEFAULT NULL,
  `branch_tenant_find_fee` decimal(7,2) DEFAULT NULL,
  `branch_tenant_find_fee_min` decimal(7,2) DEFAULT NULL,
  `branch_tenant_find_with_management_fee` decimal(7,2) DEFAULT NULL,
  `branch_tenant_find_with_management_fee_min_commercial` decimal(7,2) DEFAULT NULL,
  `branch_management_fee` decimal(7,2) DEFAULT NULL,
  `branch_management_fee_commercial` decimal(7,2) DEFAULT NULL,
  `branch_tenant_find_fee_type` tinyint(4) DEFAULT NULL,
  `branch_tenant_find_with_management_fee_type` tinyint(4) DEFAULT NULL,
  `branch_management_fee_type` tinyint(4) DEFAULT NULL,
  `branch_tenant_fees` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `branch_tenant_fees_commercial` varchar(150) DEFAULT NULL,
  `branch_sale_phone` varchar(20) DEFAULT NULL,
  `branch_letting_phone` varchar(20) DEFAULT NULL,
  `branch_sale_fax` varchar(20) DEFAULT NULL,
  `branch_letting_fax` varchar(20) DEFAULT NULL,
  `branch_sale_email` varchar(255) DEFAULT NULL,
  `branch_sale_email_commercial` varchar(255) DEFAULT NULL,
  `branch_letting_email` varchar(255) DEFAULT NULL,
  `branch_letting_email_commercial` varchar(255) DEFAULT NULL,
  `branch_accounts_email` varchar(255) DEFAULT NULL,
  `branch_works_email` varchar(255) DEFAULT NULL,
  `branch_property_number_name` varchar(50) DEFAULT NULL,
  `branch_address_line_1` varchar(255) DEFAULT NULL,
  `branch_address_line_2` varchar(255) DEFAULT NULL,
  `branch_suburb` varchar(255) DEFAULT NULL,
  `branch_town_city` varchar(255) DEFAULT NULL,
  `branch_postcode` varchar(8) DEFAULT NULL,
  `branch_country` int(11) DEFAULT NULL,
  `branch_reminder_letter_fee` decimal(7,2) DEFAULT NULL,
  `branch_missed_payment_fee` decimal(7,2) DEFAULT NULL,
  `branch_bank_name_current` tinyint(4) DEFAULT NULL,
  `branch_bank_sort_code_current` varchar(8) DEFAULT NULL,
  `branch_bank_account_number_current` varchar(8) DEFAULT NULL,
  `branch_bank_iban_current` varchar(50) DEFAULT NULL,
  `branch_bank_bic_swift_current` varchar(11) DEFAULT NULL,
  `branch_bank_account_name_current` varchar(255) DEFAULT NULL,
  `branch_bank_name_client` tinyint(4) DEFAULT NULL,
  `branch_bank_sort_code_client` varchar(8) DEFAULT NULL,
  `branch_bank_account_number_client` varchar(8) DEFAULT NULL,
  `branch_bank_iban_client` varchar(50) DEFAULT NULL,
  `branch_bank_bic_swift_client` varchar(11) DEFAULT NULL,
  `branch_bank_account_name_client` varchar(255) DEFAULT NULL,
  `branch_bank_bacs_file_originator_name` varchar(18) DEFAULT NULL,
  `branch_cheque_payable_to` varchar(100) DEFAULT NULL,
  `branch_latitude` float(10,6) DEFAULT NULL,
  `branch_longitude` float(10,6) DEFAULT NULL,
  `branch_xmas_opening_description` text DEFAULT NULL,
  `branch_easter_opening_description` text DEFAULT NULL,
  `branch_zpg_ref` varchar(10) DEFAULT NULL,
  `branch_inspection_frequency` tinyint(4) NOT NULL DEFAULT 1,
  `branch_mileage_payment` smallint(3) DEFAULT NULL,
  `branch_accompanied_viewing_schedule` text DEFAULT NULL,
  `branch_redress_scheme` varchar(255) DEFAULT NULL,
  `branch_cmp_provider` varchar(255) DEFAULT NULL,
  `branch_cmp_provider_accounting_rules` text DEFAULT NULL,
  `branch_hmrc_nrl_ref` varchar(20) DEFAULT NULL,
  `branch_deposit_protection_service_id` varchar(50) DEFAULT NULL,
  `branch_deposit_protection_service_bank_account_name` varchar(100) DEFAULT NULL,
  `branch_deposit_protection_service_bank_account_number` varchar(8) DEFAULT NULL,
  `branch_deposit_protection_service_bank_sort_code` varchar(8) DEFAULT NULL,
  `branch_mydeposits_id` varchar(50) DEFAULT NULL,
  `branch_ip_address` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch_opening_hours`
--

CREATE TABLE `branch_opening_hours` (
  `branch_opening_hours_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `branch_opening_hours_day` tinyint(4) DEFAULT NULL,
  `branch_opening_hours_open_time` time DEFAULT NULL,
  `branch_opening_hours_close_time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `branch_opening_hours_day`
--

CREATE TABLE `branch_opening_hours_day` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bulk_email`
--

CREATE TABLE `bulk_email` (
  `bulk_email_id` int(11) NOT NULL,
  `bulk_email_from_email` varchar(320) DEFAULT NULL,
  `bulk_email_from_name` varchar(255) DEFAULT NULL,
  `bulk_email_reply_to_email` varchar(320) DEFAULT NULL,
  `bulk_email_reply_to_name` varchar(255) DEFAULT NULL,
  `bulk_email_unsubscribe_email` varchar(320) DEFAULT NULL,
  `bulk_email_unsubscribe_link` text DEFAULT NULL,
  `bulk_email_unsubscribe_subject` text DEFAULT NULL,
  `bulk_email_email_body` text DEFAULT NULL,
  `bulk_email_email_subject` text DEFAULT NULL,
  `bulk_email_to_email` varchar(320) DEFAULT NULL,
  `bulk_email_cc_email` varchar(320) DEFAULT NULL,
  `bulk_email_bcc_email` varchar(320) DEFAULT NULL,
  `bulk_email_customer_type` int(11) DEFAULT NULL,
  `bulk_email_property_id` int(11) DEFAULT NULL,
  `bulk_email_app_req_id` int(11) DEFAULT NULL,
  `bulk_email_sent` tinyint(1) NOT NULL DEFAULT 2,
  `bulk_email_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `bulk_email_date_sent` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bulk_email_recipient`
--

CREATE TABLE `bulk_email_recipient` (
  `bulk_email_recipient_id` tinyint(4) NOT NULL,
  `bulk_email_recipient_name` varchar(255) DEFAULT NULL,
  `bulk_email_recipient_type` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bulk_email_template`
--

CREATE TABLE `bulk_email_template` (
  `bulk_email_template_id` tinyint(4) NOT NULL,
  `bulk_email_template_name` varchar(255) DEFAULT NULL,
  `bulk_email_template_subject` varchar(255) DEFAULT NULL,
  `bulk_email_template_category` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bulk_email_template_all_employees`
--

CREATE TABLE `bulk_email_template_all_employees` (
  `bulk_email_template_all_employees_id` tinyint(4) NOT NULL,
  `bulk_email_template_all_employees_name` varchar(255) DEFAULT NULL,
  `bulk_email_template_all_employees_subject` varchar(255) DEFAULT NULL,
  `bulk_email_template_all_employees_category` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bulk_email_template_development`
--

CREATE TABLE `bulk_email_template_development` (
  `bulk_email_template_development_id` tinyint(4) NOT NULL,
  `bulk_email_template_development_name` varchar(255) DEFAULT NULL,
  `bulk_email_template_development_subject` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bulk_email_template_valuations`
--

CREATE TABLE `bulk_email_template_valuations` (
  `bulk_email_template_valuations_id` tinyint(4) NOT NULL,
  `bulk_email_template_valuations_name` varchar(255) DEFAULT NULL,
  `bulk_email_template_valuations_subject` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `buyer_token` varchar(40) DEFAULT NULL,
  `buyer_type` tinyint(4) DEFAULT NULL,
  `buyer_title` tinyint(4) DEFAULT NULL,
  `buyer_first_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_surname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_trading_name` varchar(255) DEFAULT NULL,
  `buyer_company_name` varchar(255) DEFAULT NULL,
  `buyer_company_trading_name` varchar(255) DEFAULT NULL,
  `buyer_company_contact_name` varchar(255) DEFAULT NULL,
  `buyer_company_registration_number` varchar(10) DEFAULT NULL,
  `buyer_company_vat_registration_number` varchar(20) DEFAULT NULL,
  `buyer_company_reg_office_property_number_name` varchar(50) DEFAULT NULL,
  `buyer_company_reg_office_address_line_1` varchar(255) DEFAULT NULL,
  `buyer_company_reg_office_address_line_2` varchar(255) DEFAULT NULL,
  `buyer_company_reg_office_suburb` varchar(255) DEFAULT NULL,
  `buyer_company_reg_office_town_city` varchar(255) DEFAULT NULL,
  `buyer_company_reg_office_postcode` varchar(8) DEFAULT NULL,
  `buyer_company_reg_office_country` int(11) DEFAULT NULL,
  `buyer_phone_home` varchar(255) DEFAULT NULL,
  `buyer_phone_work` varchar(255) DEFAULT NULL,
  `buyer_phone_mobile` varchar(255) DEFAULT NULL,
  `buyer_fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_suburb` varchar(255) DEFAULT NULL,
  `buyer_town_city` varchar(255) DEFAULT NULL,
  `buyer_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_country` int(11) DEFAULT NULL,
  `buyer_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_bank_name` tinyint(4) DEFAULT NULL,
  `buyer_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_online_account` tinyint(4) DEFAULT NULL,
  `buyer_online_login_username` varchar(255) DEFAULT NULL,
  `buyer_online_login_password` varchar(255) DEFAULT NULL,
  `buyer_online_account_password_reset_token` varchar(40) DEFAULT NULL,
  `buyer_dob` date DEFAULT NULL,
  `buyer_passport_number` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `buyer_driving_licence_number` varchar(20) DEFAULT NULL,
  `buyer_nino` varchar(10) DEFAULT NULL,
  `buyer_date_created` datetime DEFAULT NULL,
  `buyer_date_updated` datetime DEFAULT NULL,
  `buyer_created_by` int(11) DEFAULT NULL,
  `buyer_updated_by` int(11) DEFAULT NULL,
  `buyer_solicitor_company` int(11) DEFAULT NULL,
  `buyer_solicitor_company_individual` int(11) DEFAULT NULL,
  `buyer_estate_agent_company` int(11) DEFAULT NULL,
  `buyer_estate_agent_company_individual` int(11) DEFAULT NULL,
  `buyer_branch` int(11) DEFAULT NULL,
  `buyer_source` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event`
--

CREATE TABLE `calendar_event` (
  `calendar_event_id` int(11) NOT NULL,
  `calendar_event_token` varchar(40) DEFAULT NULL,
  `calendar_event_company_id` int(11) DEFAULT NULL,
  `calendar_event_branch_id` int(11) DEFAULT NULL,
  `calendar_event_subject` varchar(255) DEFAULT NULL,
  `calendar_event_status` tinyint(4) DEFAULT NULL,
  `calendar_event_start` datetime DEFAULT NULL,
  `calendar_event_end` datetime DEFAULT NULL,
  `calendar_event_location` varchar(255) DEFAULT NULL,
  `calendar_event_type` tinyint(4) DEFAULT NULL,
  `calendar_event_employee` int(11) DEFAULT NULL,
  `calendar_event_description` text DEFAULT NULL,
  `calendar_event_attendee_type` int(11) DEFAULT NULL,
  `calendar_event_property` int(11) DEFAULT NULL,
  `calendar_event_tenancy` int(11) DEFAULT NULL,
  `calendar_event_development` int(11) DEFAULT NULL,
  `calendar_event_applicant` int(11) DEFAULT NULL,
  `calendar_event_valuation` int(11) DEFAULT NULL,
  `calendar_event_valuation_appointment_type` tinyint(4) DEFAULT NULL,
  `calendar_event_valuation_meeting_with` tinyint(4) DEFAULT NULL,
  `calendar_event_meet_at` tinyint(4) DEFAULT NULL,
  `calendar_event_date_created` datetime DEFAULT NULL,
  `calendar_event_date_updated` datetime DEFAULT NULL,
  `calendar_event_created_by` int(11) DEFAULT NULL,
  `calendar_event_updated_by` int(11) DEFAULT NULL,
  `calendar_event_confirmed_landlord_vendor` tinyint(4) DEFAULT NULL,
  `calendar_event_confirmed_applicant` tinyint(4) DEFAULT NULL,
  `calendar_event_notes` text DEFAULT NULL,
  `calendar_event_private_notes` text DEFAULT NULL,
  `calendar_event_branch` int(11) DEFAULT NULL,
  `calendar_event_recurring_id` int(11) DEFAULT NULL,
  `calendar_event_cancellation_reason` text DEFAULT NULL,
  `calendar_event_surveyor_company_name` varchar(255) DEFAULT NULL,
  `calendar_event_surveyor_individual_name` varchar(255) DEFAULT NULL,
  `calendar_event_surveyor_phone_number` varchar(20) DEFAULT NULL,
  `calendar_event_surveyor_behalf_of` varchar(255) DEFAULT NULL,
  `calendar_event_directory` int(11) DEFAULT NULL,
  `calendar_event_inspection_type` tinyint(1) DEFAULT NULL,
  `calendar_event_survey_type` tinyint(4) DEFAULT NULL,
  `calendar_event_time_off_type` tinyint(4) DEFAULT NULL,
  `calendar_event_time_off_reason` tinyint(4) DEFAULT NULL,
  `calendar_event_time_off_pay` tinyint(4) DEFAULT NULL,
  `calendar_event_time_off_lunch_break` tinyint(1) DEFAULT NULL,
  `calendar_event_time_off_notes` text DEFAULT NULL,
  `calendar_event_time_off_linked_sickness` tinyint(1) DEFAULT 2,
  `calendar_event_bulk_email` tinyint(4) NOT NULL DEFAULT 1,
  `calendar_event_letting_application` int(11) DEFAULT NULL,
  `calendar_event_viewing_length_override` tinyint(4) DEFAULT NULL,
  `calendar_event_extra_hours_reward_type` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_attendee_type`
--

CREATE TABLE `calendar_event_attendee_type` (
  `calendar_event_attendee_type_id` int(11) NOT NULL,
  `calendar_event_attendee_type_name` varchar(30) DEFAULT NULL,
  `calendar_event_attendee_type_survey_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_confidence`
--

CREATE TABLE `calendar_event_confidence` (
  `calendar_event_confidence_id` tinyint(4) NOT NULL,
  `calendar_event_confidence_name` varchar(15) DEFAULT NULL,
  `calendar_event_confidence_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_inspection`
--

CREATE TABLE `calendar_event_inspection` (
  `calendar_event_inspection_id` int(11) NOT NULL,
  `calendar_event_inspection_calendar_event_id` int(11) DEFAULT NULL,
  `calendar_event_inspection_cleanliness` tinyint(1) DEFAULT NULL,
  `calendar_event_inspection_gardens` tinyint(1) DEFAULT NULL,
  `calendar_event_inspection_pets` tinyint(1) DEFAULT NULL,
  `calendar_event_inspection_smoking` tinyint(1) DEFAULT NULL,
  `calendar_event_inspection_additional_occupants` tinyint(1) DEFAULT NULL,
  `calendar_event_inspection_mould` tinyint(1) DEFAULT NULL,
  `calendar_event_inspection_public_notes` text DEFAULT NULL,
  `calendar_event_inspection_private_notes` text DEFAULT NULL,
  `calendar_event_inspection_repair_requests` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_inspection_cleanliness`
--

CREATE TABLE `calendar_event_inspection_cleanliness` (
  `calendar_event_inspection_cleanliness_id` tinyint(4) NOT NULL,
  `calendar_event_inspection_cleanliness_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_inspection_type`
--

CREATE TABLE `calendar_event_inspection_type` (
  `calendar_event_inspection_type_id` tinyint(4) NOT NULL,
  `calendar_event_inspection_type_name` varchar(50) DEFAULT NULL,
  `calendar_event_inspection_type_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_location`
--

CREATE TABLE `calendar_event_location` (
  `calendar_event_location_id` tinyint(4) NOT NULL,
  `calendar_event_location_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_meet_at`
--

CREATE TABLE `calendar_event_meet_at` (
  `calendar_event_meet_at_id` tinyint(4) NOT NULL,
  `calendar_event_meet_at_name` varchar(10) DEFAULT NULL,
  `calendar_event_meet_at_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_recurring`
--

CREATE TABLE `calendar_event_recurring` (
  `calendar_event_recurring_id` int(11) NOT NULL,
  `calendar_event_recurring_calendar_event_id` int(11) DEFAULT NULL,
  `calendar_event_recurring_frequency` smallint(6) DEFAULT NULL,
  `calendar_event_recurring_frequency_unit` tinyint(4) DEFAULT NULL,
  `calendar_event_recurring_start_date` date DEFAULT NULL,
  `calendar_event_recurring_next_processing_date` date DEFAULT NULL,
  `calendar_event_recurring_suspended` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_status`
--

CREATE TABLE `calendar_event_status` (
  `calendar_event_status_id` tinyint(4) NOT NULL,
  `calendar_event_status_name` varchar(15) DEFAULT NULL,
  `calendar_event_status_display_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_survey_type`
--

CREATE TABLE `calendar_event_survey_type` (
  `calendar_event_survey_type_id` tinyint(4) NOT NULL,
  `calendar_event_survey_type_name` varchar(50) DEFAULT NULL,
  `calendar_event_survey_type_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_time_off_pay`
--

CREATE TABLE `calendar_event_time_off_pay` (
  `calendar_event_time_off_pay_id` tinyint(1) NOT NULL,
  `calendar_event_time_off_pay_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_time_off_reason`
--

CREATE TABLE `calendar_event_time_off_reason` (
  `calendar_event_time_off_reason_id` tinyint(4) NOT NULL,
  `calendar_event_time_off_reason_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_time_off_type`
--

CREATE TABLE `calendar_event_time_off_type` (
  `calendar_event_time_off_type_id` tinyint(4) NOT NULL,
  `calendar_event_time_off_type_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_type`
--

CREATE TABLE `calendar_event_type` (
  `calendar_event_type_id` tinyint(4) NOT NULL,
  `calendar_event_type_name` varchar(35) DEFAULT NULL,
  `calendar_event_type_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_updates`
--

CREATE TABLE `calendar_event_updates` (
  `calendar_event_updates_id` int(11) NOT NULL,
  `calendar_event_updates_calendar_event_id` int(11) DEFAULT NULL,
  `calendar_event_updates_private_notes` text DEFAULT NULL,
  `calendar_event_updates_date_created` datetime DEFAULT NULL,
  `calendar_event_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_viewing`
--

CREATE TABLE `calendar_event_viewing` (
  `calendar_event_viewing_id` int(11) NOT NULL,
  `calendar_event_viewing_calendar_event_id` int(11) DEFAULT NULL,
  `calendar_event_viewing_pros` text DEFAULT NULL,
  `calendar_event_viewing_cons` text DEFAULT NULL,
  `calendar_event_viewing_ptp` decimal(11,2) DEFAULT NULL,
  `calendar_event_viewing_confidence_level` tinyint(4) DEFAULT NULL,
  `calendar_event_viewing_public_notes` text DEFAULT NULL,
  `calendar_event_viewing_private_notes` text DEFAULT NULL,
  `calendar_event_viewing_type` tinyint(4) DEFAULT NULL,
  `calendar_event_viewings_referral_solicitor` tinyint(4) DEFAULT NULL,
  `calendar_event_viewings_referral_mortgage` tinyint(4) DEFAULT NULL,
  `calendar_event_viewings_referral_valuation` tinyint(4) DEFAULT NULL,
  `calendar_event_viewing_next_review_date` text DEFAULT NULL,
  `calendar_event_viewing_date_created` datetime DEFAULT NULL,
  `calendar_event_viewing_date_updated` datetime DEFAULT NULL,
  `calendar_event_viewing_created_by` int(11) DEFAULT NULL,
  `calendar_event_viewing_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_viewing_type`
--

CREATE TABLE `calendar_event_viewing_type` (
  `calendar_event_viewing_type_id` tinyint(4) NOT NULL,
  `calendar_event_viewing_type_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_files`
--

CREATE TABLE `calendar_files` (
  `calendar_files_id` int(11) NOT NULL,
  `calendar_event_id` int(11) DEFAULT NULL,
  `calendar_files_filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `calendar_files_caption` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `calendar_files_date_added` datetime DEFAULT NULL,
  `calendar_files_sort` mediumint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `call_queue_groups`
--

CREATE TABLE `call_queue_groups` (
  `call_queue_groups_id` tinyint(4) NOT NULL,
  `call_queue_groups_name` varchar(75) DEFAULT NULL,
  `call_queue_groups_extension` tinyint(4) DEFAULT NULL,
  `call_queue_groups_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `capacity_id` tinyint(4) NOT NULL,
  `capacity_name` varchar(100) DEFAULT NULL,
  `capacity_name_short` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `certificate_id` int(11) NOT NULL,
  `certificate_property` int(11) DEFAULT NULL,
  `certificate_type` tinyint(4) DEFAULT NULL,
  `certificate_reference` varchar(255) DEFAULT NULL,
  `certificate_link` varchar(255) DEFAULT NULL,
  `certificate_rating` varchar(4) DEFAULT NULL,
  `certificate_start_date` date DEFAULT NULL,
  `certificate_expiry_date` date DEFAULT NULL,
  `certificate_notes` text DEFAULT NULL,
  `certificate_notes_private` text DEFAULT NULL,
  `certificate_renewal_contractor` int(11) DEFAULT NULL,
  `certificate_renewal_instructed` tinyint(1) DEFAULT NULL,
  `certificate_renewal_last_instructed` datetime DEFAULT NULL,
  `certificate_renewal_instructed_by` int(11) DEFAULT NULL,
  `certificate_date_created` datetime DEFAULT NULL,
  `certificate_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_development`
--

CREATE TABLE `certificate_development` (
  `certificate_id` int(11) NOT NULL,
  `certificate_development` int(11) DEFAULT NULL,
  `certificate_type` tinyint(4) DEFAULT NULL,
  `certificate_reference` varchar(255) DEFAULT NULL,
  `certificate_rating` varchar(4) DEFAULT NULL,
  `certificate_start_date` date DEFAULT NULL,
  `certificate_expiry_date` date DEFAULT NULL,
  `certificate_notes` text DEFAULT NULL,
  `certificate_notes_private` text DEFAULT NULL,
  `certificate_renewal_contractor` int(11) DEFAULT NULL,
  `certificate_renewal_instructed` tinyint(4) DEFAULT NULL,
  `certificate_renewal_last_instructed` datetime DEFAULT NULL,
  `certificate_date_created` datetime DEFAULT NULL,
  `certificate_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_development_files`
--

CREATE TABLE `certificate_development_files` (
  `file_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `caption` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_files`
--

CREATE TABLE `certificate_files` (
  `file_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `caption` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_initial_status`
--

CREATE TABLE `certificate_initial_status` (
  `certificate_initial_status_id` tinyint(4) NOT NULL,
  `certificate_initial_status_name` varchar(50) DEFAULT NULL,
  `certificate_initial_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_status`
--

CREATE TABLE `certificate_status` (
  `certificate_status_id` tinyint(4) NOT NULL,
  `certificate_status_name` varchar(50) DEFAULT NULL,
  `certificate_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_type`
--

CREATE TABLE `certificate_type` (
  `certificate_type_id` tinyint(4) NOT NULL,
  `certificate_type_name` varchar(100) DEFAULT NULL,
  `certificate_type_property_field` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_updates`
--

CREATE TABLE `certificate_updates` (
  `certificate_updates_id` int(11) NOT NULL,
  `certificate_updates_certificate_id` int(11) DEFAULT NULL,
  `certificate_updates_public_notes` text DEFAULT NULL,
  `certificate_updates_private_notes` text DEFAULT NULL,
  `certificate_updates_notify_landlord` tinyint(4) DEFAULT NULL,
  `certificate_updates_notify_contractor` tinyint(4) DEFAULT NULL,
  `certificate_updates_date_created` datetime DEFAULT NULL,
  `certificate_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_updates_development`
--

CREATE TABLE `certificate_updates_development` (
  `certificate_updates_id` int(11) NOT NULL,
  `certificate_updates_certificate_id` int(11) DEFAULT NULL,
  `certificate_updates_private_notes` text DEFAULT NULL,
  `certificate_updates_date_created` datetime DEFAULT NULL,
  `certificate_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `client_source`
--

CREATE TABLE `client_source` (
  `client_source_id` tinyint(11) NOT NULL,
  `client_source_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `commission_type`
--

CREATE TABLE `commission_type` (
  `commission_type_id` tinyint(4) NOT NULL,
  `commission_type_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_token` varchar(40) DEFAULT NULL,
  `company_legal_name` varchar(100) DEFAULT NULL,
  `company_trading_name` varchar(255) DEFAULT NULL,
  `company_registration_number` varchar(10) DEFAULT NULL,
  `company_default_vat_rate` tinyint(4) DEFAULT NULL,
  `company_vat_registration_number` varchar(20) DEFAULT NULL,
  `company_reg_office_property_number_name` varchar(50) DEFAULT NULL,
  `company_reg_office_address_line_1` varchar(255) DEFAULT NULL,
  `company_reg_office_address_line_2` varchar(255) DEFAULT NULL,
  `company_reg_office_suburb` varchar(255) DEFAULT NULL,
  `company_reg_office_town_city` varchar(255) DEFAULT NULL,
  `company_reg_office_postcode` varchar(8) DEFAULT NULL,
  `company_reg_office_country` int(11) DEFAULT NULL,
  `company_property_number_name` varchar(50) DEFAULT NULL,
  `company_address_line_1` varchar(255) DEFAULT NULL,
  `company_address_line_2` varchar(255) DEFAULT NULL,
  `company_suburb` varchar(255) DEFAULT NULL,
  `company_town_city` varchar(255) DEFAULT NULL,
  `company_postcode` varchar(8) DEFAULT NULL,
  `company_country` int(11) DEFAULT NULL,
  `company_phone_number` varchar(20) DEFAULT NULL,
  `company_fax_number` varchar(20) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `company_website_display` varchar(255) DEFAULT NULL,
  `company_lock_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `comparison_period`
--

CREATE TABLE `comparison_period` (
  `comparison_period_id` tinyint(4) NOT NULL,
  `comparison_period_name` varchar(50) DEFAULT NULL,
  `comparison_period_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `contract_type`
--

CREATE TABLE `contract_type` (
  `contract_type_id` int(11) NOT NULL,
  `contract_type_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contract_type_description` varchar(200) DEFAULT NULL,
  `contract_type_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `customer_type_id` int(11) NOT NULL,
  `customer_type_name` varchar(20) DEFAULT NULL,
  `customer_type_description` varchar(30) DEFAULT NULL,
  `customer_type_description2` varchar(30) DEFAULT NULL,
  `customer_type_description3` varchar(10) DEFAULT NULL,
  `customer_type_filename` varchar(100) DEFAULT NULL,
  `customer_type_url_search_parameter` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `date_range`
--

CREATE TABLE `date_range` (
  `date_range_id` tinyint(4) NOT NULL,
  `date_range_name` varchar(50) DEFAULT NULL,
  `date_range_sort` tinyint(4) DEFAULT NULL,
  `date_range_period` text DEFAULT NULL,
  `date_range_date_format` varchar(20) DEFAULT NULL,
  `date_range_group` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `development`
--

CREATE TABLE `development` (
  `development_id` int(11) NOT NULL,
  `development_token` varchar(6) DEFAULT NULL,
  `development_branch` int(11) DEFAULT NULL,
  `development_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `development_number_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `development_address_line_1` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `development_address_line_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `development_suburb` varchar(255) DEFAULT NULL,
  `development_town_city` varchar(255) DEFAULT NULL,
  `development_postcode` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `development_country` int(11) DEFAULT NULL,
  `development_default_gsc_contractor` int(11) DEFAULT NULL,
  `development_default_epc_contractor` int(11) DEFAULT NULL,
  `development_default_electrical_contractor` int(11) DEFAULT NULL,
  `development_default_pat_contractor` int(11) DEFAULT NULL,
  `development_default_fire_alarm_contractor` int(11) DEFAULT NULL,
  `development_default_emergency_lighting_contractor` int(11) DEFAULT NULL,
  `development_type` tinyint(4) DEFAULT NULL,
  `development_requires_gas_cert` tinyint(4) DEFAULT NULL,
  `development_requires_electric_cert` tinyint(4) DEFAULT NULL,
  `development_requires_fire_alarm_cert` tinyint(4) DEFAULT NULL,
  `development_requires_emergency_lighting_cert` tinyint(4) DEFAULT NULL,
  `development_requires_fire_risk_assessment` tinyint(4) DEFAULT NULL,
  `development_works_notes` text DEFAULT NULL,
  `development_window_cleaning_public` text DEFAULT NULL,
  `development_window_cleaning_private` text DEFAULT NULL,
  `development_grounds_maintenance_public` text DEFAULT NULL,
  `development_grounds_maintenance_private` text DEFAULT NULL,
  `development_cleaning_public` text DEFAULT NULL,
  `development_cleaning_private` text DEFAULT NULL,
  `development_heating_public` text DEFAULT NULL,
  `development_heating_private` text DEFAULT NULL,
  `development_internet_public` text DEFAULT NULL,
  `development_internet_private` text DEFAULT NULL,
  `development_fire_alarm_public` text DEFAULT NULL,
  `development_fire_alarm_private` text DEFAULT NULL,
  `development_waste_public` text DEFAULT NULL,
  `development_waste_private` text DEFAULT NULL,
  `development_general_public` text DEFAULT NULL,
  `development_general_private` text DEFAULT NULL,
  `development_status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `development_type`
--

CREATE TABLE `development_type` (
  `development_type_id` tinyint(4) NOT NULL,
  `development_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `development_updates`
--

CREATE TABLE `development_updates` (
  `development_updates_id` int(11) NOT NULL,
  `development_updates_development_id` int(11) DEFAULT NULL,
  `development_updates_notes` text DEFAULT NULL,
  `development_updates_date_created` datetime DEFAULT NULL,
  `development_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `directory`
--

CREATE TABLE `directory` (
  `directory_id` int(11) NOT NULL,
  `directory_category` int(11) DEFAULT NULL,
  `directory_company_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_branch_name` varchar(100) DEFAULT NULL,
  `directory_contact_name` varchar(255) DEFAULT NULL,
  `directory_phone_work` varchar(255) DEFAULT NULL,
  `directory_phone_mobile` varchar(255) DEFAULT NULL,
  `directory_fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_website` varchar(255) DEFAULT NULL,
  `directory_dx` varchar(50) DEFAULT NULL,
  `directory_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_suburb` varchar(255) DEFAULT NULL,
  `directory_town_city` varchar(255) DEFAULT NULL,
  `directory_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_country` int(11) DEFAULT NULL,
  `directory_bank_name` tinyint(4) DEFAULT NULL,
  `directory_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_status` int(11) DEFAULT NULL,
  `directory_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_date_created` datetime DEFAULT NULL,
  `directory_date_updated` datetime DEFAULT NULL,
  `directory_created_by` int(11) DEFAULT NULL,
  `directory_updated_by` int(11) DEFAULT NULL,
  `directory_commission_scheme` tinyint(4) DEFAULT NULL,
  `directory_commission_percentage` decimal(5,2) DEFAULT NULL,
  `directory_payment_terms` tinyint(4) DEFAULT NULL,
  `directory_landlord_contractor` int(11) DEFAULT NULL,
  `directory_nominal_code` smallint(6) DEFAULT NULL,
  `directory_vat_rate` tinyint(4) DEFAULT NULL,
  `directory_accounts_purposes_only` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directory_category`
--

CREATE TABLE `directory_category` (
  `directory_category_id` int(11) NOT NULL,
  `directory_category_name` varchar(50) DEFAULT NULL,
  `directory_category_contractor` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `directory_commission_scheme`
--

CREATE TABLE `directory_commission_scheme` (
  `directory_commission_scheme_id` tinyint(4) NOT NULL,
  `directory_commission_scheme_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `directory_individual`
--

CREATE TABLE `directory_individual` (
  `directory_individual_id` int(11) NOT NULL,
  `directory_individual_company` int(11) DEFAULT NULL,
  `directory_individual_title` tinyint(4) DEFAULT NULL,
  `directory_individual_first_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_surname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_phone_home` varchar(255) DEFAULT NULL,
  `directory_individual_phone_work` varchar(255) DEFAULT NULL,
  `directory_individual_phone_mobile` varchar(255) DEFAULT NULL,
  `directory_individual_fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_email` varchar(255) DEFAULT NULL,
  `directory_individual_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_suburb` varchar(255) DEFAULT NULL,
  `directory_individual_town_city` varchar(255) DEFAULT NULL,
  `directory_individual_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_country` int(11) DEFAULT NULL,
  `directory_individual_status` int(11) DEFAULT NULL,
  `directory_individual_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_bank_name` tinyint(4) DEFAULT NULL,
  `directory_individual_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `directory_individual_date_created` datetime DEFAULT NULL,
  `directory_individual_date_updated` datetime DEFAULT NULL,
  `directory_individual_created_by` int(11) DEFAULT NULL,
  `directory_individual_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directory_status`
--

CREATE TABLE `directory_status` (
  `directory_status_id` int(11) NOT NULL,
  `directory_status_name` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directory_to_trades`
--

CREATE TABLE `directory_to_trades` (
  `directory_to_trades_id` int(11) NOT NULL,
  `directory_id` int(11) NOT NULL,
  `directory_trades_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directory_trades`
--

CREATE TABLE `directory_trades` (
  `directory_trades_id` int(11) NOT NULL,
  `directory_trades_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `discount_group`
--

CREATE TABLE `discount_group` (
  `discount_group_id` tinyint(4) NOT NULL,
  `discount_group_name` varchar(50) DEFAULT NULL,
  `discount_group_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `document_type_id` int(11) NOT NULL,
  `document_type_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `email_template_id` int(11) NOT NULL,
  `email_template_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email_template_category` tinyint(4) DEFAULT NULL,
  `email_template_to` text DEFAULT NULL,
  `email_template_cc` text DEFAULT NULL,
  `email_template_bcc` text DEFAULT NULL,
  `email_template_subject` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email_template_body` text DEFAULT NULL,
  `email_template_date_created` datetime DEFAULT NULL,
  `email_template_date_updated` datetime DEFAULT NULL,
  `email_template_created_by` int(11) DEFAULT NULL,
  `email_template_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `email_template_category`
--

CREATE TABLE `email_template_category` (
  `email_template_category_id` tinyint(4) NOT NULL,
  `email_template_category_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `company_id` int(11) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_token` varchar(40) DEFAULT NULL,
  `employee_title` tinyint(4) DEFAULT NULL,
  `employee_first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `employee_surname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `employee_mobile_number` varchar(255) DEFAULT NULL,
  `employee_mobile_number_work` varchar(255) DEFAULT NULL,
  `employee_direct_line` varchar(255) DEFAULT NULL,
  `employee_internal_extension` varchar(20) DEFAULT NULL,
  `employee_email_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `employee_email_address_personal` varchar(255) DEFAULT NULL,
  `employee_job_title` varchar(100) DEFAULT NULL,
  `employee_branch_id` int(11) DEFAULT NULL,
  `employee_default_vehicle_id` int(11) DEFAULT NULL,
  `employee_username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `employee_password` varchar(255) DEFAULT NULL,
  `employee_status` tinyint(4) DEFAULT NULL,
  `employee_payroll_status` tinyint(1) NOT NULL DEFAULT 1,
  `employee_login_status` tinyint(1) NOT NULL DEFAULT 1,
  `employee_dob` date DEFAULT NULL,
  `employee_first_login_log` tinyint(4) DEFAULT NULL,
  `employee_line_manager` int(11) DEFAULT NULL,
  `employee_line_manager_annual_leave` int(11) DEFAULT NULL,
  `employee_line_manager_first_login` int(11) DEFAULT NULL,
  `employee_email_password` varchar(255) DEFAULT NULL,
  `employee_holiday_allowance` decimal(5,2) DEFAULT NULL,
  `employee_negotiator_percentage_split` tinyint(4) DEFAULT NULL,
  `employee_lunch_break` varchar(150) DEFAULT NULL,
  `employee_lunch_break_minutes` tinyint(4) DEFAULT NULL,
  `employee_annual_leave_cover` int(11) DEFAULT NULL,
  `employee_working_hours` text DEFAULT NULL,
  `employee_start_date` date DEFAULT NULL,
  `employee_average_hours_worked_per_week` decimal(4,2) DEFAULT NULL,
  `employee_average_days_worked_per_week` decimal(2,1) DEFAULT NULL,
  `employee_annual_leave_active` tinyint(4) NOT NULL DEFAULT 1,
  `employee_annual_leave_accrual_method` tinyint(1) NOT NULL DEFAULT 1,
  `employee_hostname` varchar(50) DEFAULT NULL,
  `employee_image_filename` varchar(255) DEFAULT NULL,
  `employee_email_default_new_valuation_arranged` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_department`
--

CREATE TABLE `employee_department` (
  `employee_department_id` tinyint(4) NOT NULL,
  `employee_department_name` varchar(50) DEFAULT NULL,
  `employee_department_name2` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_group_DELETE`
--

CREATE TABLE `employee_group_DELETE` (
  `employee_group_id` int(11) NOT NULL,
  `employee_group_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_login_log`
--

CREATE TABLE `employee_login_log` (
  `employee_login_log_id` int(11) NOT NULL,
  `employee_login_log_employee_id` int(11) DEFAULT NULL,
  `employee_login_log_start_date_time` datetime DEFAULT NULL,
  `employee_login_log_date_time` datetime DEFAULT NULL,
  `employee_login_log_minutes_late` smallint(6) DEFAULT NULL,
  `employee_login_log_ip_address` varchar(45) DEFAULT NULL,
  `employee_login_log_notes` text DEFAULT NULL,
  `employee_login_log_active` tinyint(4) NOT NULL DEFAULT 1,
  `employee_login_log_hash` varchar(64) DEFAULT NULL,
  `employee_login_log_date_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `employee_login_log_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_mileage`
--

CREATE TABLE `employee_mileage` (
  `employee_mileage_id` int(11) NOT NULL,
  `employee_mileage_employee_id` int(11) DEFAULT NULL,
  `employee_mileage_vehicle_id` int(11) DEFAULT NULL,
  `employee_mileage_journey_date` date DEFAULT NULL,
  `employee_mileage_start_postcode` varchar(8) DEFAULT NULL,
  `employee_mileage_end_postcode` varchar(8) DEFAULT NULL,
  `employee_mileage_mileage` decimal(6,2) DEFAULT NULL,
  `employee_mileage_notes` varchar(255) DEFAULT NULL,
  `employee_mileage_date_created` datetime DEFAULT NULL,
  `employee_mileage_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_permissions`
--

CREATE TABLE `employee_permissions` (
  `employee_permissions_id` tinyint(4) NOT NULL,
  `employee_permissions_name` varchar(150) DEFAULT NULL,
  `employee_permissions_category` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_permissions_category`
--

CREATE TABLE `employee_permissions_category` (
  `employee_permissions_category_id` tinyint(4) NOT NULL,
  `employee_permissions_category_name` varchar(50) DEFAULT NULL,
  `employee_permissions_category_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_role`
--

CREATE TABLE `employee_role` (
  `employee_role_id` int(11) NOT NULL,
  `employee_role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_to_department`
--

CREATE TABLE `employee_to_department` (
  `employee_to_department_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_department_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_to_permissions`
--

CREATE TABLE `employee_to_permissions` (
  `employee_to_permissions_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_permissions_id` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_to_role`
--

CREATE TABLE `employee_to_role` (
  `employee_to_role_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employment_status`
--

CREATE TABLE `employment_status` (
  `employment_status_id` tinyint(4) NOT NULL,
  `employment_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `export_data`
--

CREATE TABLE `export_data` (
  `export_data_id` int(11) NOT NULL,
  `export_data_type` tinyint(11) DEFAULT NULL,
  `export_data_date_exported` datetime DEFAULT NULL,
  `export_data_last_invoice_posted_date` datetime DEFAULT NULL,
  `export_data_last_invoice_credit_posted_date` datetime DEFAULT NULL,
  `export_data_last_bacs_file_entry_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `export_date_type`
--

CREATE TABLE `export_date_type` (
  `export_date_type_id` tinyint(4) NOT NULL,
  `export_date_type_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `extra_hours_reward_type`
--

CREATE TABLE `extra_hours_reward_type` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_type`
--

CREATE TABLE `fee_type` (
  `fee_type_id` tinyint(4) NOT NULL,
  `fee_type_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` tinyint(4) NOT NULL,
  `gender_name` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `guarantor`
--

CREATE TABLE `guarantor` (
  `guarantor_id` int(11) NOT NULL,
  `guarantor_title` tinyint(4) DEFAULT NULL,
  `guarantor_first_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_surname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_phone_home` varchar(255) DEFAULT NULL,
  `guarantor_phone_work` varchar(255) DEFAULT NULL,
  `guarantor_phone_mobile` varchar(255) DEFAULT NULL,
  `guarantor_fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_suburb` varchar(255) DEFAULT NULL,
  `guarantor_town_city` varchar(255) DEFAULT NULL,
  `guarantor_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_country` int(11) DEFAULT NULL,
  `guarantor_dob` date DEFAULT NULL,
  `guarantor_passport_number` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_bank_name` tinyint(4) DEFAULT NULL,
  `guarantor_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `guarantor_date_created` datetime DEFAULT NULL,
  `guarantor_date_updated` datetime DEFAULT NULL,
  `guarantor_created_by` int(11) DEFAULT NULL,
  `guarantor_updated_by` int(11) DEFAULT NULL,
  `guarantor_online_login_username` varchar(255) DEFAULT NULL,
  `guarantor_online_login_password` varchar(255) DEFAULT NULL,
  `guarantor_nino` varchar(13) DEFAULT NULL,
  `guarantor_employment_status` tinyint(4) DEFAULT NULL,
  `guarantor_employer_name` varchar(255) DEFAULT NULL,
  `guarantor_driving_licence_number` varchar(20) DEFAULT NULL,
  `guarantor_income` decimal(9,2) DEFAULT NULL,
  `guarantor_income_frequency` tinyint(4) DEFAULT NULL,
  `guarantor_income_notes` text DEFAULT NULL,
  `guarantor_online_account` tinyint(4) DEFAULT NULL,
  `guarantor_referencing_provider` int(11) DEFAULT NULL,
  `guarantor_referencing_provider_reference` varchar(20) DEFAULT NULL,
  `guarantor_branch` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guarantor_income`
--

CREATE TABLE `guarantor_income` (
  `guarantor_income_id` int(11) NOT NULL,
  `guarantor_income_guarantor_id` int(11) DEFAULT NULL,
  `guarantor_income_amount` decimal(10,2) DEFAULT NULL,
  `guarantor_income_frequency` tinyint(4) DEFAULT NULL,
  `guarantor_income_source` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `income_frequency`
--

CREATE TABLE `income_frequency` (
  `income_frequency_id` tinyint(4) NOT NULL,
  `income_frequency_name` varchar(15) DEFAULT NULL,
  `income_frequency_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_status`
--

CREATE TABLE `insurance_status` (
  `insurance_status_id` tinyint(4) NOT NULL,
  `insurance_status_name` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `interested_applicant`
--

CREATE TABLE `interested_applicant` (
  `interested_applicant_id` int(11) NOT NULL,
  `interested_applicant_applicant_id` int(11) DEFAULT NULL,
  `interested_applicant_property` int(11) DEFAULT NULL,
  `interested_applicant_notes` text DEFAULT NULL,
  `interested_applicant_status` tinyint(1) NOT NULL DEFAULT 2,
  `interested_applicant_status_reason` text DEFAULT NULL,
  `interested_applicant_date_created` datetime DEFAULT NULL,
  `interested_applicant_date_updated` datetime DEFAULT NULL,
  `interested_applicant_created_by` int(11) DEFAULT NULL,
  `interested_applicant_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `interested_applicant_updates`
--

CREATE TABLE `interested_applicant_updates` (
  `interested_applicant_updates_id` int(11) NOT NULL,
  `interested_applicant_updates_interested_applicant_id` int(11) DEFAULT NULL,
  `interested_applicant_updates_private_notes` text DEFAULT NULL,
  `interested_applicant_updates_date_created` datetime DEFAULT NULL,
  `interested_applicant_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_updates`
--

CREATE TABLE `invoice_updates` (
  `invoice_updates_id` int(11) NOT NULL,
  `invoice_updates_invoice_id` int(11) DEFAULT NULL,
  `invoice_updates_private_notes` text DEFAULT NULL,
  `invoice_updates_date_created` datetime DEFAULT NULL,
  `invoice_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `keys_add`
--

CREATE TABLE `keys_add` (
  `keys_add_id` int(11) NOT NULL,
  `keys_add_property` int(11) DEFAULT NULL,
  `keys_add_from` tinyint(4) DEFAULT NULL,
  `keys_add_quantity` tinyint(4) DEFAULT NULL,
  `keys_add_notes` text DEFAULT NULL,
  `keys_add_date_created` datetime DEFAULT NULL,
  `keys_add_date_updated` datetime DEFAULT NULL,
  `keys_add_created_by` int(11) DEFAULT NULL,
  `keys_add_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keys_add_from`
--

CREATE TABLE `keys_add_from` (
  `keys_add_from_id` tinyint(4) NOT NULL,
  `keys_add_from_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `keys_location`
--

CREATE TABLE `keys_location` (
  `keys_location_id` int(11) NOT NULL,
  `keys_location_name` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `keys_log_location`
--

CREATE TABLE `keys_log_location` (
  `keys_log_location_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `keys_location` int(11) DEFAULT NULL,
  `keys_log_location_updated_by` int(11) DEFAULT NULL,
  `keys_log_location_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keys_transaction`
--

CREATE TABLE `keys_transaction` (
  `keys_transaction_id` int(11) NOT NULL,
  `keys_transaction_set_id` int(11) DEFAULT NULL,
  `keys_transaction_property` int(11) DEFAULT NULL,
  `keys_transaction_client_type` int(11) DEFAULT NULL,
  `keys_transaction_client` int(11) DEFAULT NULL,
  `keys_transaction_quantity` tinyint(4) DEFAULT NULL,
  `keys_transaction_out` datetime DEFAULT NULL,
  `keys_transaction_employee` int(11) DEFAULT NULL,
  `keys_transaction_notes` text DEFAULT NULL,
  `keys_transaction_notes_private` text DEFAULT NULL,
  `keys_transaction_in` datetime DEFAULT '0000-00-00 00:00:00',
  `keys_transaction_in_employee` int(11) DEFAULT NULL,
  `keys_transaction_email_reminders` tinyint(4) DEFAULT 1,
  `keys_transaction_due_back` tinyint(4) DEFAULT NULL,
  `keys_transaction_date_created` datetime DEFAULT NULL,
  `keys_transaction_date_updated` datetime DEFAULT NULL,
  `keys_transaction_created_by` int(11) DEFAULT NULL,
  `keys_transaction_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keys_transaction_delet`
--

CREATE TABLE `keys_transaction_delet` (
  `keys_transaction_id` int(11) NOT NULL,
  `keys_transaction_property` int(11) DEFAULT NULL,
  `keys_transaction_quantity` tinyint(4) DEFAULT NULL,
  `keys_transaction_to_person` varchar(100) DEFAULT NULL,
  `keys_transaction_to` int(11) DEFAULT NULL,
  `keys_transaction_out` datetime DEFAULT NULL,
  `keys_transaction_due_in` datetime DEFAULT NULL,
  `keys_transaction_in` datetime DEFAULT NULL,
  `keys_transaction_notes` text DEFAULT NULL,
  `keys_transaction_status` tinyint(4) DEFAULT NULL,
  `keys_transaction_date_created` datetime DEFAULT NULL,
  `keys_transaction_date_updated` datetime DEFAULT NULL,
  `keys_transaction_created_by` int(11) DEFAULT NULL,
  `keys_transaction_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keys_transaction_status_delet`
--

CREATE TABLE `keys_transaction_status_delet` (
  `keys_transaction_status_id` tinyint(4) NOT NULL,
  `keys_transaction_status_name` varchar(15) DEFAULT NULL,
  `keys_transaction_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `key_safe`
--

CREATE TABLE `key_safe` (
  `key_safe_id` int(11) NOT NULL,
  `key_safe_property` int(11) DEFAULT NULL,
  `key_safe_development` int(11) DEFAULT NULL,
  `key_safe_code` varchar(10) DEFAULT NULL,
  `key_safe_location` tinyint(4) DEFAULT NULL,
  `key_safe_contains` text DEFAULT NULL,
  `key_safe_notes` text DEFAULT NULL,
  `key_safe_date_added` date DEFAULT NULL,
  `key_safe_created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `key_safe_location`
--

CREATE TABLE `key_safe_location` (
  `key_safe_location_id` tinyint(4) NOT NULL,
  `key_safe_location_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `key_transaction_updates`
--

CREATE TABLE `key_transaction_updates` (
  `key_transaction_updates_id` int(11) NOT NULL,
  `key_transaction_updates_keys_transaction_id` int(11) DEFAULT NULL,
  `key_transaction_updates_private_notes` text DEFAULT NULL,
  `key_transaction_updates_date_created` datetime DEFAULT NULL,
  `key_transaction_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `landlord_id` int(11) NOT NULL,
  `landlord_token` varchar(40) DEFAULT NULL,
  `landlord_type` tinyint(4) DEFAULT NULL,
  `landlord_title` tinyint(4) DEFAULT NULL,
  `landlord_first_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_surname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_trading_name` varchar(255) DEFAULT NULL,
  `landlord_company_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_company_trading_name` varchar(255) DEFAULT NULL,
  `landlord_company_contact_name` varchar(255) DEFAULT NULL,
  `landlord_company_registration_number` varchar(10) DEFAULT NULL,
  `landlord_company_vat_registration_number` varchar(20) DEFAULT NULL,
  `landlord_company_reg_office_property_number_name` varchar(50) DEFAULT NULL,
  `landlord_company_reg_office_address_line_1` varchar(255) DEFAULT NULL,
  `landlord_company_reg_office_address_line_2` varchar(255) DEFAULT NULL,
  `landlord_company_reg_office_suburb` varchar(255) DEFAULT NULL,
  `landlord_company_reg_office_town_city` varchar(255) DEFAULT NULL,
  `landlord_company_reg_office_postcode` varchar(8) DEFAULT NULL,
  `landlord_company_reg_office_country` int(11) DEFAULT NULL,
  `landlord_phone_home` varchar(255) DEFAULT NULL,
  `landlord_phone_work` varchar(255) DEFAULT NULL,
  `landlord_phone_mobile` varchar(255) DEFAULT NULL,
  `landlord_fax` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_email_accounts` varchar(255) DEFAULT NULL,
  `landlord_email_works` varchar(255) DEFAULT NULL,
  `landlord_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_suburb` varchar(255) DEFAULT NULL,
  `landlord_town_city` varchar(255) DEFAULT NULL,
  `landlord_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_country` int(11) DEFAULT NULL,
  `landlord_bank_name` tinyint(4) DEFAULT NULL,
  `landlord_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_bank_iban` varchar(50) DEFAULT NULL,
  `landlord_bank_bic_swift` varchar(11) DEFAULT NULL,
  `landlord_nrl_status` int(11) DEFAULT NULL,
  `landlord_nrl_tax_rate` decimal(4,2) DEFAULT NULL,
  `landlord_nrl_reference` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_nrl_date` date DEFAULT NULL,
  `landlord_status` int(11) DEFAULT NULL,
  `landlord_lead_source` int(11) DEFAULT NULL,
  `landlord_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_online_account` tinyint(4) DEFAULT NULL,
  `landlord_online_login_username` varchar(255) DEFAULT NULL,
  `landlord_online_login_password` varchar(255) DEFAULT NULL,
  `landlord_online_account_password_reset_token` varchar(40) DEFAULT NULL,
  `landlord_lha` tinyint(4) DEFAULT NULL,
  `landlord_pets` tinyint(4) DEFAULT NULL,
  `landlord_smoking` tinyint(4) DEFAULT NULL,
  `landlord_sharers` tinyint(4) DEFAULT NULL,
  `landlord_contractors_use` int(11) DEFAULT NULL,
  `landlord_tenant_find_fee` decimal(7,2) DEFAULT NULL,
  `landlord_tenant_find_fee_type` tinyint(4) DEFAULT NULL,
  `landlord_tenant_find_with_management_fee` decimal(7,2) DEFAULT NULL,
  `landlord_tenant_find_with_management_fee_type` tinyint(4) DEFAULT NULL,
  `landlord_management_fee` decimal(7,2) DEFAULT NULL,
  `landlord_management_fee_type` tinyint(4) DEFAULT NULL,
  `landlord_dob` date DEFAULT NULL,
  `landlord_passport_number` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `landlord_driving_licence_number` varchar(20) DEFAULT NULL,
  `landlord_nino` varchar(13) DEFAULT NULL,
  `landlord_branch` int(11) DEFAULT NULL,
  `landlord_solicitor_company` int(11) DEFAULT NULL,
  `landlord_mailing_list` tinyint(4) DEFAULT NULL,
  `landlord_solicitor_company_individual` int(11) DEFAULT NULL,
  `landlord_works_notes` text DEFAULT NULL,
  `landlord_fees_notes` text DEFAULT NULL,
  `landlord_emails_new_invoice_credit` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_new_property_inspection` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_new_invoice` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_new_landlord_payment` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_edit_works` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_tenant_charge_chase` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_new_application` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_edit_application` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_new_viewing` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_edit_viewing` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_new_certificate_renewal` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_certificate_take_on_chase` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_selective_licence_chase` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_emails_outstanding_invoice_balance_exceed_income` tinyint(1) NOT NULL DEFAULT 2,
  `landlord_bacs_file` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_suspend_payments` tinyint(1) NOT NULL DEFAULT 2,
  `landlord_capacity` tinyint(4) DEFAULT NULL,
  `landlord_deceased` tinyint(4) NOT NULL DEFAULT 2,
  `landlord_discount_group` tinyint(4) DEFAULT 1,
  `landlord_date_created` datetime DEFAULT NULL,
  `landlord_date_updated` datetime DEFAULT NULL,
  `landlord_created_by` int(11) DEFAULT NULL,
  `landlord_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landlord_attachments`
--

CREATE TABLE `landlord_attachments` (
  `landlord_attachments_id` int(11) NOT NULL,
  `landlord_id` int(11) DEFAULT NULL,
  `landlord_attachments_file_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `landlord_attachments_file_size` int(11) UNSIGNED DEFAULT NULL,
  `landlord_attachments_caption` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `landlord_attachments_sort` tinyint(4) DEFAULT NULL,
  `landlord_attachments_date_created` datetime DEFAULT NULL,
  `landlord_attachments_created_by` int(11) DEFAULT NULL,
  `landlord_attachments_document_type_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `landlord_nrl_status`
--

CREATE TABLE `landlord_nrl_status` (
  `landlord_nrl_status_id` int(11) NOT NULL,
  `landlord_nrl_status_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landlord_status`
--

CREATE TABLE `landlord_status` (
  `landlord_status_id` int(11) NOT NULL,
  `landlord_status_name` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lead_source`
--

CREATE TABLE `lead_source` (
  `lead_source_id` int(11) NOT NULL,
  `lead_source_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lease_type`
--

CREATE TABLE `lease_type` (
  `lease_type_id` tinyint(4) NOT NULL,
  `lease_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `led_pocket_action`
--

CREATE TABLE `led_pocket_action` (
  `led_pocket_action_id` tinyint(4) NOT NULL,
  `led_pocket_action_name` varchar(50) DEFAULT NULL,
  `led_pocket_action_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `letting_service`
--

CREATE TABLE `letting_service` (
  `letting_service_id` tinyint(4) NOT NULL,
  `letting_service_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `letting_service_name_short` varchar(10) DEFAULT NULL,
  `letting_service_archived` tinyint(1) NOT NULL DEFAULT 2,
  `letting_service_sort` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `letting_task`
--

CREATE TABLE `letting_task` (
  `letting_task_id` smallint(6) NOT NULL,
  `tenancy_id` int(11) DEFAULT NULL,
  `letting_task_stage` tinyint(4) DEFAULT NULL,
  `letting_task_name` varchar(100) DEFAULT NULL,
  `letting_task_status` tinyint(4) DEFAULT NULL,
  `letting_task_notes` text DEFAULT NULL,
  `letting_task_date_completed` date DEFAULT NULL,
  `letting_task_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `letting_task_status`
--

CREATE TABLE `letting_task_status` (
  `letting_task_status_id` tinyint(4) NOT NULL,
  `letting_task_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `letting_type`
--

CREATE TABLE `letting_type` (
  `letting_type_id` int(11) NOT NULL,
  `letting_type_name` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `local_authority`
--

CREATE TABLE `local_authority` (
  `local_authority_id` int(11) NOT NULL,
  `local_authority_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `local_authority_housing_department_name` varchar(100) DEFAULT NULL,
  `local_authority_property_number_name` varchar(50) DEFAULT NULL,
  `local_authority_address_line_1` varchar(255) DEFAULT NULL,
  `local_authority_address_line_2` varchar(255) DEFAULT NULL,
  `local_authority_suburb` varchar(255) DEFAULT NULL,
  `local_authority_town_city` varchar(255) DEFAULT NULL,
  `local_authority_postcode` varchar(8) DEFAULT NULL,
  `local_authority_country` int(11) DEFAULT NULL,
  `local_authority_selective_licencing` tinyint(4) DEFAULT NULL,
  `local_authority_selective_licencing_start_date` date DEFAULT NULL,
  `local_authority_selective_licencing_end_date` date DEFAULT NULL,
  `local_authority_selective_licencing_email_address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `local_authority_branch_reference`
--

CREATE TABLE `local_authority_branch_reference` (
  `local_authority_branch_reference_id` int(11) NOT NULL,
  `local_authority_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `local_authority_branch_reference` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `local_authority_ward`
--

CREATE TABLE `local_authority_ward` (
  `local_authority_ward_id` int(11) NOT NULL,
  `local_authority_ward_name` varchar(100) DEFAULT NULL,
  `local_authority_ward_selective_licencing` tinyint(4) DEFAULT NULL,
  `local_authority_ward_selective_licencing_start_date` date DEFAULT NULL,
  `local_authority_ward_selective_licencing_end_date` date DEFAULT NULL,
  `local_authority_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `media_type`
--

CREATE TABLE `media_type` (
  `media_type_id` tinyint(4) NOT NULL,
  `media_type_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `motivational_quotes`
--

CREATE TABLE `motivational_quotes` (
  `motivational_quotes_id` smallint(6) NOT NULL,
  `motivational_quotes_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` smallint(6) NOT NULL,
  `nationality_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `policy_expiry_status`
--

CREATE TABLE `policy_expiry_status` (
  `policy_expiry_status_id` tinyint(4) NOT NULL,
  `policy_expiry_status_name` varchar(50) DEFAULT NULL,
  `policy_expiry_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `possession_status_completion`
--

CREATE TABLE `possession_status_completion` (
  `possession_status_completion_id` tinyint(4) NOT NULL,
  `possession_status_completion_name` varchar(30) DEFAULT NULL,
  `possession_status_completion_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `premium_listing_lettings`
--

CREATE TABLE `premium_listing_lettings` (
  `premium_listing_id` tinyint(4) NOT NULL,
  `premium_listing_name` varchar(100) DEFAULT NULL,
  `premium_listing_archive` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `premium_listing_sales`
--

CREATE TABLE `premium_listing_sales` (
  `premium_listing_id` tinyint(4) NOT NULL,
  `premium_listing_name` varchar(100) DEFAULT NULL,
  `premium_listing_archive` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `probate_status`
--

CREATE TABLE `probate_status` (
  `probate_status_id` tinyint(4) NOT NULL,
  `probate_status_name` varchar(30) DEFAULT NULL,
  `probate_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `programming_task`
--

CREATE TABLE `programming_task` (
  `programming_task_id` int(11) NOT NULL,
  `programming_task_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `programming_task_severity` tinyint(4) DEFAULT NULL,
  `programming_task_sort` int(11) DEFAULT NULL,
  `programming_task_status` tinyint(4) DEFAULT NULL,
  `programming_task_date_created` datetime DEFAULT NULL,
  `programming_task_date_updated` datetime DEFAULT NULL,
  `programming_task_created_by` int(11) DEFAULT NULL,
  `programming_task_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `programming_task_status`
--

CREATE TABLE `programming_task_status` (
  `programming_task_status_id` tinyint(4) NOT NULL,
  `programming_task_status_name` varchar(50) DEFAULT NULL,
  `programming_task_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_token` varchar(40) DEFAULT NULL,
  `property_availability` tinyint(4) DEFAULT NULL,
  `property_letting_service` tinyint(4) DEFAULT NULL,
  `property_letting_available_from` date DEFAULT NULL,
  `property_letting_furnished_status` tinyint(4) DEFAULT NULL,
  `property_letting_pets` tinyint(4) DEFAULT NULL,
  `property_letting_smoking` tinyint(4) DEFAULT NULL,
  `property_category` tinyint(4) DEFAULT NULL,
  `property_type` int(11) DEFAULT NULL,
  `property_number_name` varchar(255) DEFAULT NULL,
  `property_apartment_number_name` varchar(255) DEFAULT NULL,
  `property_address_line_1` varchar(255) DEFAULT NULL,
  `property_address_line_2` varchar(255) DEFAULT NULL,
  `property_suburb` int(11) DEFAULT NULL,
  `property_town_city` varchar(255) DEFAULT NULL,
  `property_postcode` varchar(8) DEFAULT NULL,
  `property_country` int(11) DEFAULT NULL,
  `property_display_address` varchar(120) DEFAULT NULL,
  `property_plot_reference` varchar(255) DEFAULT NULL,
  `property_no_bedrooms` tinyint(4) DEFAULT NULL,
  `property_no_bathrooms` tinyint(4) DEFAULT NULL,
  `property_no_receptions` tinyint(4) DEFAULT NULL,
  `property_no_outbuildings` tinyint(4) DEFAULT NULL,
  `property_living_space` decimal(7,2) DEFAULT NULL,
  `property_living_space_unit` tinyint(4) DEFAULT NULL,
  `property_land_size` decimal(7,2) DEFAULT NULL,
  `property_land_size_unit` tinyint(4) DEFAULT NULL,
  `property_letting_student` int(11) DEFAULT NULL,
  `property_letting_share` tinyint(4) DEFAULT NULL,
  `property_letting_shared_facilities` text DEFAULT NULL,
  `property_price` decimal(11,2) DEFAULT NULL,
  `property_price_vat` tinyint(4) DEFAULT NULL,
  `property_price_qualifier` tinyint(4) DEFAULT NULL,
  `property_letting_rent_frequency` int(11) DEFAULT NULL,
  `property_letting_deposit` decimal(11,2) DEFAULT NULL,
  `property_contract_type` int(11) DEFAULT NULL,
  `property_new_build` int(11) DEFAULT NULL,
  `property_htb` tinyint(4) DEFAULT NULL,
  `property_letting_minimum_term` tinyint(4) DEFAULT NULL,
  `property_letting_term_type` int(11) DEFAULT NULL,
  `property_latitude` decimal(11,8) DEFAULT NULL,
  `property_longitude` decimal(11,8) DEFAULT NULL,
  `property_letting_tenant_fees` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `property_tenure_type` tinyint(4) DEFAULT NULL,
  `property_leasehold_date` date DEFAULT NULL,
  `property_leasehold_term` smallint(6) DEFAULT NULL,
  `property_summary` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `property_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `property_poem` text DEFAULT NULL,
  `property_year_built` varchar(4) DEFAULT NULL,
  `property_no_floors` tinyint(4) DEFAULT NULL,
  `property_entrance_floor` int(11) DEFAULT NULL,
  `property_floor_level` smallint(4) DEFAULT NULL,
  `property_lift` tinyint(4) DEFAULT NULL,
  `property_publish_website` tinyint(1) DEFAULT NULL,
  `property_publish_rightmove` tinyint(1) DEFAULT NULL,
  `property_publish_zoopla` tinyint(1) DEFAULT NULL,
  `property_publish_otm` tinyint(1) DEFAULT NULL,
  `property_publish_monitors` tinyint(1) DEFAULT NULL,
  `property_auction` tinyint(1) DEFAULT 2,
  `property_auction_notes` text DEFAULT NULL,
  `property_commercial_price_per_unit_area` decimal(7,2) DEFAULT NULL,
  `property_status` int(11) DEFAULT NULL,
  `property_date_created` datetime DEFAULT NULL,
  `property_date_updated` datetime DEFAULT NULL,
  `property_letting_all_bills_included` tinyint(4) DEFAULT NULL,
  `property_letting_gas_bill` tinyint(4) DEFAULT NULL,
  `property_letting_electricity_bill` tinyint(4) DEFAULT NULL,
  `property_letting_water_bill` tinyint(4) DEFAULT NULL,
  `property_letting_oil_bill` tinyint(4) DEFAULT NULL,
  `property_letting_telephone_bill` tinyint(4) DEFAULT NULL,
  `property_letting_internet_bill` tinyint(4) DEFAULT NULL,
  `property_letting_tv_licence` tinyint(4) DEFAULT NULL,
  `property_letting_sat_cable_tv_bill` tinyint(4) DEFAULT NULL,
  `property_letting_council_tax` tinyint(4) DEFAULT NULL,
  `property_letting_service_charge` tinyint(4) DEFAULT NULL,
  `property_letting_ground_rent` tinyint(4) DEFAULT NULL,
  `property_commercial_business_for_sale` tinyint(4) DEFAULT NULL,
  `property_condition` tinyint(4) DEFAULT NULL,
  `property_created_by` int(11) DEFAULT NULL,
  `property_updated_by` int(11) DEFAULT NULL,
  `property_parking_spaces` tinyint(4) DEFAULT NULL,
  `property_letting_tenancy_renewal_fee` decimal(6,2) DEFAULT NULL,
  `property_tenant_find_fee` decimal(7,2) DEFAULT NULL,
  `property_tenant_find_fee_type` tinyint(4) DEFAULT NULL,
  `property_tenant_find_with_management_fee` decimal(7,2) DEFAULT NULL,
  `property_tenant_find_with_management_fee_type` tinyint(4) DEFAULT NULL,
  `property_management_fee` decimal(7,2) DEFAULT NULL,
  `property_management_fee_type` tinyint(4) DEFAULT NULL,
  `property_sole_sale_fee` decimal(7,2) DEFAULT NULL,
  `property_multi_sale_fee` decimal(7,2) DEFAULT NULL,
  `property_sole_sale_fee_type` tinyint(4) DEFAULT NULL,
  `property_multi_sale_fee_type` tinyint(4) DEFAULT NULL,
  `property_letting_lha` tinyint(4) DEFAULT NULL,
  `property_branch` int(11) DEFAULT NULL,
  `property_selective_licence_required` tinyint(1) DEFAULT NULL,
  `property_selective_licencing_status` tinyint(4) DEFAULT NULL,
  `property_selective_licencing_orn` varchar(50) DEFAULT NULL,
  `property_selective_licencing_lhr` varchar(255) DEFAULT NULL,
  `property_selective_licencing_plr` varchar(255) DEFAULT NULL,
  `property_selective_licencing_ln` varchar(255) DEFAULT NULL,
  `property_selective_licencing_licence_holder` tinyint(4) DEFAULT NULL,
  `property_selective_licencing_invoice_ref` int(11) DEFAULT NULL,
  `property_selective_licencing_payment_ref` varchar(255) DEFAULT NULL,
  `property_selective_licence_status` tinyint(4) DEFAULT NULL,
  `property_local_authority` int(11) DEFAULT NULL,
  `property_local_authority_ward` int(11) DEFAULT NULL,
  `property_ward` tinyint(4) DEFAULT NULL,
  `property_council_tax_band` varchar(1) DEFAULT NULL,
  `property_mains_gas_supply` tinyint(4) DEFAULT NULL,
  `property_viewing_arrangement` tinyint(4) DEFAULT NULL,
  `property_viewing_arrangement_notes` text DEFAULT NULL,
  `property_viewing_notification_emails` text DEFAULT NULL,
  `property_keys_location` int(11) DEFAULT NULL,
  `property_notes` text DEFAULT NULL,
  `property_rateable_value` decimal(11,2) DEFAULT NULL,
  `property_service_charge_status` tinyint(4) DEFAULT NULL,
  `property_service_charge` decimal(10,2) DEFAULT NULL,
  `property_service_charge_unit` int(11) DEFAULT NULL,
  `property_service_charge_vat` tinyint(4) DEFAULT NULL,
  `property_insurance_status` tinyint(4) DEFAULT NULL,
  `property_insurance` decimal(10,2) DEFAULT NULL,
  `property_insurance_unit` int(11) DEFAULT NULL,
  `property_insurance_vat` tinyint(4) DEFAULT NULL,
  `property_ground_rent` decimal(10,2) DEFAULT NULL,
  `property_ground_rent_unit` int(11) DEFAULT NULL,
  `property_ground_rent_vat` tinyint(4) DEFAULT NULL,
  `property_letting_guarantor` tinyint(4) DEFAULT NULL,
  `property_letting_rent_payable` tinyint(4) DEFAULT NULL,
  `property_chain` text DEFAULT NULL,
  `property_mortgage_company_name` varchar(100) DEFAULT NULL,
  `property_mortgage_co_property_number_name` varchar(50) DEFAULT NULL,
  `property_mortgage_co_address_line_1` varchar(255) DEFAULT NULL,
  `property_mortgage_co_address_line_2` varchar(100) DEFAULT NULL,
  `property_mortgage_co_suburb` varchar(60) DEFAULT NULL,
  `property_mortgage_co_town_city` varchar(60) DEFAULT NULL,
  `property_mortgage_co_postcode` varchar(8) DEFAULT NULL,
  `property_mortgage_co_country` int(11) DEFAULT NULL,
  `property_freeholder_name` varchar(100) DEFAULT NULL,
  `property_freeholder_property_number_name` varchar(50) DEFAULT NULL,
  `property_freeholder_address_line_1` varchar(100) DEFAULT NULL,
  `property_freeholder_address_line_2` varchar(100) DEFAULT NULL,
  `property_freeholder_suburb` varchar(60) DEFAULT NULL,
  `property_freeholder_town_city` varchar(60) DEFAULT NULL,
  `property_freeholder_postcode` varchar(8) DEFAULT NULL,
  `property_freeholder_country` int(11) DEFAULT NULL,
  `property_rightmove_link` text DEFAULT NULL,
  `property_zoopla_link` text DEFAULT NULL,
  `property_otm_link` text DEFAULT NULL,
  `property_vendor_solicitor_company` int(11) DEFAULT NULL,
  `property_vendor_solicitor_company_individual` int(11) DEFAULT NULL,
  `property_development` int(11) DEFAULT NULL,
  `property_letting_gsc_contractor` int(11) DEFAULT NULL,
  `property_hmo` tinyint(1) DEFAULT NULL,
  `property_leasehold_notes` text DEFAULT NULL,
  `property_lost_manangement_reason` tinyint(4) DEFAULT NULL,
  `property_valuer` int(11) DEFAULT NULL,
  `property_negotiator` int(11) DEFAULT NULL,
  `property_works_notes` text DEFAULT NULL,
  `property_has_board` tinyint(4) DEFAULT NULL,
  `property_has_board_notes` text DEFAULT NULL,
  `property_has_virtual_tour` text DEFAULT NULL,
  `property_has_virtual_tour_notes` text DEFAULT NULL,
  `property_commission_take_on_payment` decimal(6,2) DEFAULT NULL,
  `property_commission_take_on_payment_type` tinyint(4) DEFAULT NULL,
  `property_commission_take_on_date_paid` date DEFAULT '0000-00-00',
  `property_commission_completion_payment` decimal(6,2) DEFAULT NULL,
  `property_commission_completion_payment_type` tinyint(4) DEFAULT NULL,
  `property_commission_completion_date_paid` date DEFAULT '0000-00-00',
  `property_commission_completion_payment_negotiator` decimal(6,2) DEFAULT NULL,
  `property_commission_completion_payment_type_negotiator` tinyint(4) DEFAULT NULL,
  `property_commission_completion_date_paid_negotiator` date DEFAULT '0000-00-00',
  `property_archived` tinyint(4) NOT NULL DEFAULT 2,
  `property_marketing` tinyint(4) NOT NULL DEFAULT 2,
  `property_bank_name` tinyint(4) DEFAULT NULL,
  `property_bank_sort_code` varchar(8) DEFAULT NULL,
  `property_bank_account_number` varchar(8) DEFAULT NULL,
  `property_bank_account_name` varchar(100) DEFAULT NULL,
  `property_bank_iban` varchar(50) DEFAULT NULL,
  `property_bank_bic_swift` varchar(11) DEFAULT NULL,
  `property_valuation_notes` text DEFAULT NULL,
  `property_personal_interest` text DEFAULT NULL,
  `property_date_unavailable` date DEFAULT NULL,
  `property_date_available` date DEFAULT NULL,
  `property_hots` text DEFAULT NULL,
  `property_lease_obligations` tinyint(4) DEFAULT NULL,
  `property_possession_status` tinyint(4) DEFAULT NULL,
  `property_background_notes` text DEFAULT NULL,
  `property_premium_rightmove` tinyint(4) DEFAULT NULL,
  `property_premium_date_rightmove` date DEFAULT NULL,
  `property_premium_date_rightmove_expiry` date DEFAULT NULL,
  `property_premium_text_rightmove` tinyint(4) DEFAULT NULL,
  `property_premium_zoopla` tinyint(4) DEFAULT NULL,
  `property_premium_date_zoopla` date DEFAULT NULL,
  `property_premium_date_zoopla_expiry` date DEFAULT NULL,
  `property_video_link` text DEFAULT NULL,
  `property_spareroom_listing_id` varchar(10) DEFAULT NULL,
  `property_amg_reference` varchar(20) DEFAULT NULL,
  `property_viewing_length` tinyint(4) DEFAULT NULL,
  `property_viewing_type` tinyint(4) DEFAULT NULL,
  `property_block_management_name` varchar(255) DEFAULT NULL,
  `property_block_management_phone` varchar(255) DEFAULT NULL,
  `property_block_management_email` varchar(255) DEFAULT NULL,
  `property_fees_notes` text DEFAULT NULL,
  `property_viewings_suspended` tinyint(4) NOT NULL DEFAULT 2,
  `property_epc_status` tinyint(4) DEFAULT NULL,
  `property_gsc_status` tinyint(4) DEFAULT NULL,
  `property_eicr_status` tinyint(4) DEFAULT NULL,
  `property_hmo_licence_status` tinyint(4) DEFAULT NULL,
  `property_pat_status` tinyint(4) DEFAULT NULL,
  `property_fire_alarm_status` tinyint(4) DEFAULT NULL,
  `property_emergency_lighting_status` tinyint(4) DEFAULT NULL,
  `property_fra_status` tinyint(4) DEFAULT NULL,
  `property_certificate_notes` text DEFAULT NULL,
  `property_next_review_date` date DEFAULT NULL,
  `property_next_review_notes` text DEFAULT NULL,
  `property_info_location` text DEFAULT NULL,
  `property_info_planning` text DEFAULT NULL,
  `property_info_tenure` text DEFAULT NULL,
  `property_info_terms` text DEFAULT NULL,
  `property_info_vat` text DEFAULT NULL,
  `property_info_legal_costs` text DEFAULT NULL,
  `property_info_viewing` text DEFAULT NULL,
  `property_info_business_rates` text DEFAULT NULL,
  `property_shared_ownership` tinyint(4) DEFAULT NULL,
  `property_shared_ownership_percentage` tinyint(4) DEFAULT NULL,
  `property_shared_ownership_rent` decimal(8,2) DEFAULT NULL,
  `property_shared_ownership_rent_frequency` int(11) DEFAULT NULL,
  `property_shared_ownership_landlord` int(11) DEFAULT NULL,
  `property_chain_status` tinyint(4) DEFAULT NULL,
  `property_price_psqft` decimal(10,0) DEFAULT NULL,
  `property_multi_agent` int(11) DEFAULT NULL,
  `property_valuation_id` int(11) DEFAULT NULL,
  `property_viewing_max_per_slot` tinyint(4) DEFAULT NULL,
  `property_minimum_offer` decimal(11,2) DEFAULT NULL,
  `property_probate_status` tinyint(4) DEFAULT NULL,
  `property_probate_notes` text DEFAULT NULL,
  `property_title_status` tinyint(4) DEFAULT NULL,
  `property_title_notes` text DEFAULT NULL,
  `possession_status_completion` tinyint(4) DEFAULT NULL,
  `property_access_arrangement` tinyint(4) DEFAULT NULL,
  `property_rental_rent` decimal(8,2) DEFAULT NULL,
  `property_rental_rent_frequency` tinyint(4) DEFAULT NULL,
  `property_rental_erv` decimal(8,2) DEFAULT NULL,
  `property_rental_erv_frequency` tinyint(4) DEFAULT NULL,
  `property_rental_tenancy_type` tinyint(4) DEFAULT NULL,
  `property_rental_tenancy_start_date` date DEFAULT NULL,
  `property_rental_tenancy_length_months` tinyint(4) DEFAULT NULL,
  `property_rental_public_notes` text DEFAULT NULL,
  `property_neg_split_exclude` tinyint(1) NOT NULL DEFAULT 2,
  `property_withdrawal_reason` text DEFAULT NULL,
  `property_withdrawal_reason_select` tinyint(4) DEFAULT NULL,
  `property_on_withdrawal_notice` tinyint(1) NOT NULL DEFAULT 2,
  `property_withdrawal_notice_expiry_date` date DEFAULT NULL,
  `property_withdrawal_next_review_date` date DEFAULT NULL,
  `property_withdrawal_next_review_notes` text DEFAULT NULL,
  `property_withdrawal_close_lead` tinyint(1) NOT NULL DEFAULT 2,
  `property_withdrawal_close_lead_reason` text DEFAULT NULL,
  `property_cash_buyers_only` tinyint(1) NOT NULL DEFAULT 2,
  `property_cash_buyers_only_reason` text DEFAULT NULL,
  `property_corporate_instruction` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Triggers `property`
--
DELIMITER $$
CREATE TRIGGER `property_logs_update` AFTER UPDATE ON `property` FOR EACH ROW BEGIN
IF (OLD.property_price!=NEW.property_price AND OLD.property_price != '0.00') THEN
INSERT INTO property_log_price (property_id, property_price_old, property_price_new, property_published, property_updated_by, property_date_updated)
VALUES (NEW.property_id, OLD.property_price, NEW.property_price, NEW.property_publish_website, NEW.property_updated_by, NEW.property_date_updated);
END IF;
IF (OLD.property_status!=NEW.property_status) THEN
INSERT INTO property_log_status (property_id, property_status_old, property_status_new, property_status_notes, property_published, property_updated_by, property_date_updated)
VALUES (NEW.property_id, OLD.property_status, NEW.property_status, NEW.property_withdrawal_reason, NEW.property_publish_website, NEW.property_updated_by, NEW.property_date_updated);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `property_accessibility`
--

CREATE TABLE `property_accessibility` (
  `property_accessibility_id` int(11) NOT NULL DEFAULT 0,
  `property_accessibility_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_access_arrangement`
--

CREATE TABLE `property_access_arrangement` (
  `property_access_arrangement_id` tinyint(4) NOT NULL,
  `property_access_arrangement_name` varchar(30) DEFAULT NULL,
  `property_access_arrangement_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_appliances`
--

CREATE TABLE `property_appliances` (
  `property_appliances_id` int(11) NOT NULL,
  `property_appliances_name` varchar(60) DEFAULT NULL,
  `property_appliances_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_area_unit`
--

CREATE TABLE `property_area_unit` (
  `property_area_unit_id` tinyint(4) NOT NULL,
  `property_area_unit_name` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_area_unit_singular` varchar(15) DEFAULT NULL,
  `property_area_unit_name_short` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_availability`
--

CREATE TABLE `property_availability` (
  `property_availability_id` tinyint(4) NOT NULL,
  `property_availability_name` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_availability_display_name` varchar(20) DEFAULT NULL,
  `property_availability_display_name2` varchar(100) DEFAULT NULL,
  `property_availability_seo_name` varchar(30) DEFAULT NULL,
  `property_availability_xml_name` varchar(10) DEFAULT NULL,
  `property_availability_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_category`
--

CREATE TABLE `property_category` (
  `property_category_id` tinyint(4) NOT NULL,
  `property_category_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_condition`
--

CREATE TABLE `property_condition` (
  `property_condition_id` tinyint(4) NOT NULL,
  `property_condition_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_entrance_floor`
--

CREATE TABLE `property_entrance_floor` (
  `property_entrance_floor_id` int(11) NOT NULL,
  `property_entrance_floor_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_entrance_floor_sort` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `property_features_id` int(11) NOT NULL,
  `property_features_name` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_files`
--

CREATE TABLE `property_files` (
  `file_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `caption` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `sort` mediumint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_floor`
--

CREATE TABLE `property_floor` (
  `property_floor_id` tinyint(4) NOT NULL,
  `property_floor_name` varchar(20) DEFAULT NULL,
  `property_floor_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_furnished_status`
--

CREATE TABLE `property_furnished_status` (
  `property_furnished_status_id` tinyint(4) NOT NULL DEFAULT 0,
  `property_furnished_status_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_furnished_status_rightmove` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_heating`
--

CREATE TABLE `property_heating` (
  `property_heating_id` int(11) NOT NULL DEFAULT 0,
  `property_heating_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `image_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `filename` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `caption` varchar(100) DEFAULT '',
  `filesize` int(11) UNSIGNED DEFAULT 0,
  `date_added` datetime DEFAULT NULL,
  `sort` mediumint(4) DEFAULT NULL,
  `sort_highlights` mediumint(4) DEFAULT 127,
  `floor_plan` tinyint(4) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_landlord`
--

CREATE TABLE `property_landlord` (
  `property_landlord_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `landlord_id` int(11) DEFAULT NULL,
  `landlord_lead` tinyint(1) DEFAULT NULL,
  `landlord_official` tinyint(4) NOT NULL DEFAULT 1,
  `landlord_invoicing` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_lease_obligations`
--

CREATE TABLE `property_lease_obligations` (
  `property_lease_obligations_id` tinyint(4) NOT NULL,
  `property_lease_obligations_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_log_price`
--

CREATE TABLE `property_log_price` (
  `property_log_price_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_price_old` decimal(11,2) DEFAULT NULL,
  `property_price_new` decimal(11,2) DEFAULT NULL,
  `property_published` tinyint(1) DEFAULT NULL,
  `property_updated_by` int(11) DEFAULT NULL,
  `property_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_log_status`
--

CREATE TABLE `property_log_status` (
  `property_log_status_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_status_old` int(11) DEFAULT NULL,
  `property_status_new` int(11) DEFAULT NULL,
  `property_status_notes` text DEFAULT NULL,
  `property_published` tinyint(1) DEFAULT NULL,
  `property_updated_by` int(11) DEFAULT NULL,
  `property_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_lost_management`
--

CREATE TABLE `property_lost_management` (
  `property_lost_management_id` tinyint(4) NOT NULL,
  `property_lost_management_reason` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_media`
--

CREATE TABLE `property_media` (
  `property_media_id` int(11) NOT NULL,
  `property_media_property_id` int(11) DEFAULT NULL,
  `property_media_link` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `property_media_type` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale`
--

CREATE TABLE `property_offer_sale` (
  `property_offer_sale_id` int(11) NOT NULL,
  `property_offer_sale_property` int(11) DEFAULT NULL,
  `property_offer_sale_price` decimal(10,2) DEFAULT NULL,
  `property_offer_sale_finance` tinyint(11) DEFAULT NULL,
  `property_offer_sale_mortgage_deposit` tinyint(2) DEFAULT NULL,
  `property_offer_sale_type` tinyint(4) DEFAULT NULL,
  `property_offer_sale_survey` tinyint(4) DEFAULT NULL,
  `property_offer_sale_htb` tinyint(4) DEFAULT NULL,
  `property_offer_sale_htb_approved` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain` tinyint(4) DEFAULT NULL,
  `property_offer_sale_status` int(11) DEFAULT NULL,
  `property_offer_sale_status_reason` text DEFAULT NULL,
  `property_offer_sale_notes` text DEFAULT NULL,
  `property_offer_sale_notes_private` text DEFAULT NULL,
  `property_offer_sale_employee` int(11) DEFAULT NULL,
  `property_offer_sale_referral_solicitor` tinyint(4) DEFAULT NULL,
  `property_offer_sale_referral_solicitor_notes` text DEFAULT NULL,
  `property_offer_sale_referral_surveyor` tinyint(4) DEFAULT NULL,
  `property_offer_sale_referral_surveyor_notes` text DEFAULT NULL,
  `property_offer_sale_referral_mortgage` tinyint(4) DEFAULT NULL,
  `property_offer_sale_referral_mortgage_notes` text DEFAULT NULL,
  `property_offer_sale_referral_valuation` tinyint(4) DEFAULT NULL,
  `property_offer_sale_referral_valuation_notes` text DEFAULT NULL,
  `property_offer_sale_viewings` tinyint(4) DEFAULT NULL,
  `property_offer_sale_revised_offer_id` int(11) DEFAULT NULL,
  `property_offer_sale_date_created` datetime DEFAULT NULL,
  `property_offer_sale_date_updated` datetime DEFAULT NULL,
  `property_offer_sale_created_by` int(11) DEFAULT NULL,
  `property_offer_sale_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Triggers `property_offer_sale`
--
DELIMITER $$
CREATE TRIGGER `property_offer_sale_logs_insert` AFTER INSERT ON `property_offer_sale` FOR EACH ROW BEGIN
INSERT INTO property_offer_sale_log_status (property_offer_sale_id, property_offer_sale_status_new, property_offer_sale_updated_by, property_offer_sale_date_updated)
VALUES (NEW.property_offer_sale_id, NEW.property_offer_sale_status, NEW.property_offer_sale_updated_by, NEW.property_offer_sale_date_updated);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `property_offer_sale_logs_update` AFTER UPDATE ON `property_offer_sale` FOR EACH ROW BEGIN
IF (OLD.property_offer_sale_status!=NEW.property_offer_sale_status) THEN
INSERT INTO property_offer_sale_log_status (property_offer_sale_id, property_offer_sale_status_old, property_offer_sale_status_new, property_offer_sale_updated_by, property_offer_sale_date_updated)
VALUES (NEW.property_offer_sale_id, OLD.property_offer_sale_status, NEW.property_offer_sale_status, NEW.property_offer_sale_updated_by, NEW.property_offer_sale_date_updated);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_applicants`
--

CREATE TABLE `property_offer_sale_applicants` (
  `property_offer_sale_applicants_id` int(11) NOT NULL,
  `property_offer_sale_id` int(11) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_attachments`
--

CREATE TABLE `property_offer_sale_attachments` (
  `property_offer_sale_attachments_id` int(11) NOT NULL,
  `property_offer_sale_id` int(11) DEFAULT NULL,
  `property_offer_sale_attachments_filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `property_offer_sale_attachments_caption` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `property_offer_sale_attachments_sort` mediumint(4) DEFAULT NULL,
  `property_offer_sale_attachments_date_created` datetime DEFAULT NULL,
  `property_offer_sale_attachments_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_chain`
--

CREATE TABLE `property_offer_sale_chain` (
  `property_offer_sale_chain_id` int(11) NOT NULL,
  `property_offer_sale_chain_sort` tinyint(4) DEFAULT NULL,
  `property_offer_sale_id` int(11) DEFAULT NULL,
  `property_offer_sale_chain_name` varchar(255) DEFAULT NULL,
  `property_offer_sale_chain_property_address` varchar(255) DEFAULT NULL,
  `property_offer_vendor_property_id` int(11) DEFAULT NULL,
  `property_offer_sale_chain_buyers_name` varchar(255) DEFAULT NULL,
  `property_offer_buyer_property_id` int(11) DEFAULT NULL,
  `property_offer_sale_chain_sale_price` decimal(11,2) DEFAULT NULL,
  `property_offer_sale_chain_selling` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain_estate_agent_details` text DEFAULT NULL,
  `property_offer_sale_chain_position` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain_status` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain_mortgage` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain_survey` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain_checked` tinyint(4) DEFAULT NULL,
  `property_offer_sale_chain_notes` text DEFAULT NULL,
  `property_offer_sale_chain_date_created` datetime DEFAULT NULL,
  `property_offer_sale_chain_date_updated` datetime DEFAULT NULL,
  `property_offer_sale_chain_created_by` int(11) DEFAULT NULL,
  `property_offer_sale_chain_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_chain_position`
--

CREATE TABLE `property_offer_sale_chain_position` (
  `property_offer_sale_chain_position_id` tinyint(4) NOT NULL,
  `property_offer_sale_chain_position_name` varchar(50) DEFAULT NULL,
  `property_offer_sale_chain_position_name2` varchar(50) DEFAULT NULL,
  `property_offer_sale_chain_position_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_chain_status`
--

CREATE TABLE `property_offer_sale_chain_status` (
  `property_offer_sale_chain_status_id` tinyint(4) NOT NULL,
  `property_offer_sale_chain_status_name` varchar(30) DEFAULT NULL,
  `property_offer_sale_chain_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_log_status`
--

CREATE TABLE `property_offer_sale_log_status` (
  `property_offer_sale_log_status_id` int(11) NOT NULL,
  `property_offer_sale_id` int(11) DEFAULT NULL,
  `property_offer_sale_status_old` int(11) DEFAULT NULL,
  `property_offer_sale_status_new` int(11) DEFAULT NULL,
  `property_offer_sale_updated_by` int(11) DEFAULT NULL,
  `property_offer_sale_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_type`
--

CREATE TABLE `property_offer_sale_type` (
  `property_offer_sale_type_id` tinyint(4) NOT NULL,
  `property_offer_sale_type_name` varchar(25) DEFAULT NULL,
  `property_offer_sale_type_description` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_sale_updates`
--

CREATE TABLE `property_offer_sale_updates` (
  `property_offer_sale_updates_id` int(11) NOT NULL,
  `property_offer_sale_updates_property_offer_sale_id` int(11) DEFAULT NULL,
  `property_offer_sale_updates_public_notes` text DEFAULT NULL,
  `property_offer_sale_updates_private_notes` text DEFAULT NULL,
  `property_offer_sale_updates_notify_vendors` tinyint(4) DEFAULT NULL,
  `property_offer_sale_updates_notify_applicants` tinyint(4) DEFAULT NULL,
  `property_offer_sale_updates_notify_sales_negotiation` tinyint(4) DEFAULT NULL,
  `property_offer_sale_updates_notify_sales_progression` tinyint(4) DEFAULT NULL,
  `property_offer_sale_updates_date_created` datetime DEFAULT NULL,
  `property_offer_sale_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_offer_status`
--

CREATE TABLE `property_offer_status` (
  `property_offer_status_id` int(11) NOT NULL,
  `property_offer_status_name` varchar(35) NOT NULL,
  `property_offer_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_outside_space`
--

CREATE TABLE `property_outside_space` (
  `property_outside_space_id` int(11) NOT NULL,
  `property_outside_space_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_parking`
--

CREATE TABLE `property_parking` (
  `property_parking_id` int(11) NOT NULL,
  `property_parking_name` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_possession_status`
--

CREATE TABLE `property_possession_status` (
  `property_possession_status_id` tinyint(4) NOT NULL,
  `property_possession_status_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_price_qualifier`
--

CREATE TABLE `property_price_qualifier` (
  `price_qualifier_id` tinyint(4) NOT NULL DEFAULT 0,
  `price_qualifier_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `price_qualifier_name_short` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_rent_frequency`
--

CREATE TABLE `property_rent_frequency` (
  `property_rent_frequency_id` int(11) NOT NULL DEFAULT 0,
  `property_rent_frequency_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_rent_frequency_sort` tinyint(4) DEFAULT NULL,
  `property_rent_frequency_short` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_rightmove_performance_statistics`
--

CREATE TABLE `property_rightmove_performance_statistics` (
  `prps_id` int(11) NOT NULL,
  `prps_date` date DEFAULT NULL,
  `prps_property_id` int(11) DEFAULT NULL,
  `prps_property_availability` int(11) DEFAULT NULL,
  `prps_property_status` int(11) DEFAULT NULL,
  `prps_featured_property` tinyint(1) DEFAULT NULL,
  `prps_premium_listing` tinyint(1) DEFAULT NULL,
  `prps_total_summary_views` int(11) DEFAULT NULL,
  `prps_total_detail_views` int(11) DEFAULT NULL,
  `prps_click_through_rate` decimal(4,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_room`
--

CREATE TABLE `property_room` (
  `property_room_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_room_name` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_room_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_room_length` decimal(6,2) DEFAULT NULL,
  `property_room_width` decimal(6,2) DEFAULT NULL,
  `property_room_dimension_unit` tinyint(4) DEFAULT NULL,
  `property_room_dimension_text` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_room_images_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_room_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_room_dimension`
--

CREATE TABLE `property_room_dimension` (
  `property_room_dimension_id` tinyint(4) NOT NULL DEFAULT 0,
  `property_room_dimension_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_room_letting`
--

CREATE TABLE `property_room_letting` (
  `property_room_letting_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_room_letting_sort` tinyint(4) NOT NULL,
  `property_room_letting_status` int(11) DEFAULT NULL,
  `property_room_letting_rent` decimal(6,2) DEFAULT NULL,
  `property_room_letting_rent_frequency` int(11) DEFAULT NULL,
  `property_room_letting_deposit` decimal(6,2) DEFAULT NULL,
  `property_room_letting_size` tinyint(4) DEFAULT NULL,
  `property_room_letting_floor` tinyint(4) DEFAULT NULL,
  `property_room_letting_en_suite` tinyint(4) DEFAULT NULL,
  `property_room_letting_furnished` tinyint(4) DEFAULT NULL,
  `property_room_letting_available_from` date DEFAULT NULL,
  `property_room_letting_gender` tinyint(4) DEFAULT NULL,
  `property_room_letting_dob` date DEFAULT NULL,
  `property_room_letting_profession` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_room_letting_size`
--

CREATE TABLE `property_room_letting_size` (
  `property_room_letting_size_id` tinyint(4) NOT NULL,
  `property_room_letting_size_name` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_security`
--

CREATE TABLE `property_security` (
  `property_security_id` tinyint(4) NOT NULL,
  `property_security_name` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_status`
--

CREATE TABLE `property_status` (
  `property_status_id` int(11) NOT NULL,
  `property_status_name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_status_type` tinyint(4) DEFAULT NULL,
  `property_status_name_short` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_tenancy`
--

CREATE TABLE `property_tenancy` (
  `property_tenancy_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_tenancy_description` varchar(255) DEFAULT NULL,
  `property_tenancy_tenant` varchar(255) DEFAULT NULL,
  `property_tenancy_bedrooms` tinyint(4) DEFAULT NULL,
  `property_tenancy_size` decimal(8,2) DEFAULT NULL,
  `property_tenancy_size_unit` tinyint(4) DEFAULT NULL,
  `property_tenancy_rent` decimal(11,2) DEFAULT NULL,
  `property_tenancy_rent_frequency` tinyint(4) DEFAULT NULL,
  `property_tenancy_erv` decimal(11,2) DEFAULT NULL,
  `property_tenancy_erv_frequency` tinyint(4) DEFAULT NULL,
  `property_tenancy_lease_type` tinyint(4) DEFAULT NULL,
  `property_tenancy_lease_start_date` date DEFAULT NULL,
  `property_tenancy_lease_expiry_date` date DEFAULT NULL,
  `property_tenancy_public_notes` text DEFAULT NULL,
  `property_tenancy_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_tenure_type`
--

CREATE TABLE `property_tenure_type` (
  `property_tenure_type_id` tinyint(4) NOT NULL DEFAULT 0,
  `property_tenure_type_name` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_term_type`
--

CREATE TABLE `property_term_type` (
  `property_term_type_id` int(11) NOT NULL DEFAULT 0,
  `property_term_type_name` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_accessibility`
--

CREATE TABLE `property_to_accessibility` (
  `property_to_accessibility_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_accessibility_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_appliances`
--

CREATE TABLE `property_to_appliances` (
  `property_to_appliances_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_appliances_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_features_custom`
--

CREATE TABLE `property_to_features_custom` (
  `property_to_features_custom_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_feature` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_heating`
--

CREATE TABLE `property_to_heating` (
  `property_to_heating_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_heating_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_outside_space`
--

CREATE TABLE `property_to_outside_space` (
  `property_to_outside_space_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_outside_space_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_parking`
--

CREATE TABLE `property_to_parking` (
  `property_to_parking_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_parking_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_security`
--

CREATE TABLE `property_to_security` (
  `property_to_security_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_security_id` tinyint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_to_use_class`
--

CREATE TABLE `property_to_use_class` (
  `property_to_use_class_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_use_class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `property_type_id` int(11) NOT NULL DEFAULT 0,
  `property_type_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_type_group` int(11) DEFAULT NULL,
  `property_type_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_type_group`
--

CREATE TABLE `property_type_group` (
  `property_type_group_id` int(11) NOT NULL,
  `property_type_group_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `property_type_group_active` tinyint(4) NOT NULL DEFAULT 1,
  `property_type_group_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_updates`
--

CREATE TABLE `property_updates` (
  `property_updates_id` int(11) NOT NULL,
  `property_updates_property_id` int(11) DEFAULT NULL,
  `property_updates_notes_public` text DEFAULT NULL,
  `property_updates_notes_private` text DEFAULT NULL,
  `property_updates_property_next_review_date` date DEFAULT NULL,
  `property_updates_property_next_review_notes` text DEFAULT NULL,
  `property_updates_notify_landlord_vendor` tinyint(4) DEFAULT NULL,
  `property_updates_date_created` datetime DEFAULT NULL,
  `property_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_use_class`
--

CREATE TABLE `property_use_class` (
  `property_use_class_id` int(11) NOT NULL DEFAULT 0,
  `property_use_class_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_vendor`
--

CREATE TABLE `property_vendor` (
  `property_vendor_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `vendor_lead` tinyint(1) DEFAULT NULL,
  `vendor_official` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_viewing_arrangement`
--

CREATE TABLE `property_viewing_arrangement` (
  `property_viewing_arrangement_id` tinyint(4) NOT NULL,
  `property_viewing_arrangement_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_viewing_length`
--

CREATE TABLE `property_viewing_length` (
  `property_viewing_length_id` tinyint(4) NOT NULL,
  `property_viewing_length_name` varchar(20) DEFAULT NULL,
  `property_viewing_length_minutes` tinyint(4) DEFAULT NULL,
  `property_viewing_length_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_viewing_type`
--

CREATE TABLE `property_viewing_type` (
  `property_viewing_type_id` tinyint(4) NOT NULL,
  `property_viewing_type_name` varchar(20) DEFAULT NULL,
  `property_viewing_type_description` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `property_withdrawal_reason`
--

CREATE TABLE `property_withdrawal_reason` (
  `property_withdrawal_reason_id` tinyint(4) NOT NULL,
  `property_withdrawal_reason_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `referral_id` int(11) NOT NULL,
  `referral_type` tinyint(4) DEFAULT NULL,
  `referral_sale_purchase` tinyint(1) DEFAULT NULL,
  `referral_customer_type` int(11) DEFAULT NULL,
  `referral_customer` int(11) DEFAULT NULL,
  `referral_customer_email` varchar(255) DEFAULT NULL,
  `referral_directory_company` int(11) DEFAULT NULL,
  `referral_property` int(11) DEFAULT NULL,
  `referral_valuation` int(11) DEFAULT NULL,
  `referral_notes` text DEFAULT NULL,
  `referral_notes_private` text DEFAULT NULL,
  `referral_notes_directory_company` text DEFAULT NULL,
  `referral_employee` int(11) DEFAULT NULL,
  `referral_status` int(11) DEFAULT NULL,
  `referral_commission_our_invoice_ref` varchar(50) DEFAULT NULL,
  `referral_commission_amount` decimal(10,2) DEFAULT NULL,
  `referral_commission_date_paid` date DEFAULT NULL,
  `referral_total_amount_paid` decimal(10,2) NOT NULL DEFAULT 0.00,
  `referral_total_number_of_payments` tinyint(4) NOT NULL DEFAULT 0,
  `referral_total_amount_paid_employee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `referral_total_number_of_payments_employee` tinyint(4) NOT NULL DEFAULT 0,
  `referral_date_created` datetime DEFAULT NULL,
  `referral_date_updated` datetime DEFAULT NULL,
  `referral_created_by` int(11) DEFAULT NULL,
  `referral_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_payments`
--

CREATE TABLE `referral_payments` (
  `referral_payments_id` int(11) NOT NULL,
  `referral_payments_referral_id` int(11) DEFAULT NULL,
  `referral_payments_amount` decimal(10,2) DEFAULT NULL,
  `referral_payments_date_paid` date DEFAULT NULL,
  `referral_payments_date_created` datetime DEFAULT NULL,
  `referral_payments_date_updated` datetime DEFAULT NULL,
  `referral_payments_created_by` int(11) DEFAULT NULL,
  `referral_payments_updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_payments_employee`
--

CREATE TABLE `referral_payments_employee` (
  `referral_payments_employee_id` int(11) NOT NULL,
  `referral_payments_employee_referral_id` int(11) DEFAULT NULL,
  `referral_payments_employee_payment_type` tinyint(4) DEFAULT NULL,
  `referral_payments_employee_employee_id` int(11) DEFAULT NULL,
  `referral_payments_employee_amount` decimal(10,2) DEFAULT NULL,
  `referral_payments_employee_date_paid` date DEFAULT NULL,
  `referral_payments_employee_date_created` datetime DEFAULT NULL,
  `referral_payments_employee_date_updated` datetime DEFAULT NULL,
  `referral_payments_employee_created_by` int(11) DEFAULT NULL,
  `referral_payments_employee_updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_payment_type`
--

CREATE TABLE `referral_payment_type` (
  `referral_payment_type_id` tinyint(4) NOT NULL,
  `referral_payment_type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_sale_purchase`
--

CREATE TABLE `referral_sale_purchase` (
  `referral_sale_purchase_id` tinyint(1) NOT NULL,
  `referral_sale_purchase_name` varchar(30) DEFAULT NULL,
  `referral_sale_purchase_sort` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_status`
--

CREATE TABLE `referral_status` (
  `referral_status_id` int(11) NOT NULL,
  `referral_status_name` varchar(30) DEFAULT NULL,
  `referral_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_type`
--

CREATE TABLE `referral_type` (
  `referral_type_id` tinyint(4) NOT NULL,
  `referral_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `referral_updates`
--

CREATE TABLE `referral_updates` (
  `referral_updates_id` int(11) NOT NULL,
  `referral_updates_referral_id` int(11) DEFAULT NULL,
  `referral_updates_public_notes` text DEFAULT NULL,
  `referral_updates_private_notes` text DEFAULT NULL,
  `referral_updates_notify_directory_company` tinyint(4) DEFAULT NULL,
  `referral_updates_notify_client` tinyint(4) DEFAULT NULL,
  `referral_updates_date_created` datetime DEFAULT NULL,
  `referral_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rent_legal_expenses_insurance`
--

CREATE TABLE `rent_legal_expenses_insurance` (
  `rlei_id` int(11) NOT NULL,
  `rlei_policy_type` tinyint(4) DEFAULT NULL,
  `rlei_tenancy_id` int(11) DEFAULT NULL,
  `rlei_property_id` int(11) DEFAULT NULL,
  `rlei_room_id` int(11) DEFAULT NULL,
  `rlei_policy_ref` varchar(50) DEFAULT NULL,
  `rlei_policy_start_date` date DEFAULT NULL,
  `rlei_policy_end_date` date DEFAULT NULL,
  `rlei_term` smallint(6) DEFAULT NULL,
  `rlei_term_unit` tinyint(4) DEFAULT NULL,
  `rlei_notes` text DEFAULT NULL,
  `rlei_status` tinyint(4) DEFAULT NULL,
  `rlei_date_created` datetime DEFAULT NULL,
  `rlei_date_updated` datetime DEFAULT NULL,
  `rlei_created_by` int(11) DEFAULT NULL,
  `rlei_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rent_legal_expenses_insurance_status`
--

CREATE TABLE `rent_legal_expenses_insurance_status` (
  `rleis_id` tinyint(4) NOT NULL,
  `rleis_name` varchar(75) DEFAULT NULL,
  `rleis_sort` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rent_legal_expenses_insurance_type`
--

CREATE TABLE `rent_legal_expenses_insurance_type` (
  `rleit_id` tinyint(4) NOT NULL,
  `rleit_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `sale_offer_id` int(11) DEFAULT NULL,
  `sale_property` int(11) DEFAULT NULL,
  `sale_agreed_date` date DEFAULT NULL,
  `sale_agreed_price` decimal(10,2) DEFAULT NULL,
  `sale_purchase_finance` tinyint(4) DEFAULT NULL,
  `sale_notes` text DEFAULT NULL,
  `sale_vendor_solicitor_company_intermediary` int(11) DEFAULT NULL,
  `sale_vendor_solicitor_company` int(11) DEFAULT NULL,
  `sale_vendor_solicitor_company_individual` int(11) DEFAULT NULL,
  `sale_vendor_mortgage_advisor` int(11) DEFAULT NULL,
  `sale_vendor_mortgage_advisor_individual` int(11) DEFAULT NULL,
  `sale_buyer_solicitor_company_intermediary` int(11) DEFAULT NULL,
  `sale_buyer_solicitor_company` int(11) DEFAULT NULL,
  `sale_buyer_solicitor_company_individual` int(11) DEFAULT NULL,
  `sale_buyer_mortgage_advisor` int(4) DEFAULT NULL,
  `sale_buyer_mortgage_advisor_individual` int(11) DEFAULT NULL,
  `sale_status` tinyint(4) DEFAULT NULL,
  `sale_target_exchange_date` date DEFAULT NULL,
  `sale_target_completion_date` date DEFAULT NULL,
  `sale_collapsed_reason` text DEFAULT NULL,
  `sale_collapsed_reason_id` tinyint(4) DEFAULT NULL,
  `sale_viewings_status` tinyint(4) DEFAULT 1,
  `sale_employee_responsible` int(11) DEFAULT NULL,
  `sale_next_review_date` date DEFAULT NULL,
  `sale_next_review_notes` text DEFAULT NULL,
  `sale_media_utilities` tinyint(1) DEFAULT 1,
  `sale_commission_completion_payment` decimal(6,2) DEFAULT NULL,
  `sale_commission_completion_payment_type` tinyint(4) DEFAULT NULL,
  `sale_commission_completion_date_paid` date DEFAULT '0000-00-00',
  `sale_completion_date` date DEFAULT NULL,
  `sale_invoice_check_override` tinyint(4) NOT NULL DEFAULT 2,
  `sale_auto_progression_chase_vendor` tinyint(4) NOT NULL DEFAULT 1,
  `sale_auto_progression_chase_buyer` tinyint(4) NOT NULL DEFAULT 1,
  `sale_last_update` datetime DEFAULT NULL,
  `sale_created_by` int(11) DEFAULT NULL,
  `sale_updated_by` int(11) DEFAULT NULL,
  `sale_date_created` datetime DEFAULT NULL,
  `sale_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Triggers `sale`
--
DELIMITER $$
CREATE TRIGGER `sale_logs_update` AFTER UPDATE ON `sale` FOR EACH ROW BEGIN
IF (OLD.sale_status!=NEW.sale_status) THEN
INSERT INTO sale_log_status (sale_id, sale_status_old, sale_status_new, sale_updated_by, sale_date_updated)
VALUES (NEW.sale_id, OLD.sale_status, NEW.sale_status, NEW.sale_updated_by, NEW.sale_date_updated);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sale_buyers`
--

CREATE TABLE `sale_buyers` (
  `sale_buyers_id` int(11) NOT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_collapsed_reason`
--

CREATE TABLE `sale_collapsed_reason` (
  `sale_collapsed_reason_id` tinyint(4) NOT NULL,
  `sale_collapsed_reason_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_finance`
--

CREATE TABLE `sale_finance` (
  `sale_finance_id` tinyint(4) NOT NULL,
  `sale_finance_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_log_status`
--

CREATE TABLE `sale_log_status` (
  `sale_log_status_id` int(11) NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `sale_status_old` tinyint(1) DEFAULT NULL,
  `sale_status_new` tinyint(1) DEFAULT NULL,
  `sale_updated_by` int(11) DEFAULT NULL,
  `sale_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_status`
--

CREATE TABLE `sale_status` (
  `sale_status_id` tinyint(4) NOT NULL,
  `sale_status_name` varchar(30) DEFAULT NULL,
  `sale_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_task`
--

CREATE TABLE `sale_task` (
  `sale_task_id` int(11) NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `sale_task_type` tinyint(4) DEFAULT NULL,
  `sale_task_name` varchar(255) DEFAULT NULL,
  `sale_task_status` tinyint(4) DEFAULT NULL,
  `sale_task_target_date` date DEFAULT NULL,
  `sale_task_completed_date` date DEFAULT NULL,
  `sale_task_notes` text DEFAULT NULL,
  `sale_task_notes_private` text DEFAULT NULL,
  `sale_task_sort` tinyint(4) DEFAULT NULL,
  `sale_task_vendor_notified` tinyint(4) DEFAULT NULL,
  `sale_task_buyer_notified` tinyint(4) DEFAULT NULL,
  `sale_task_date_updated` datetime DEFAULT NULL,
  `sale_task_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_task_defaults`
--

CREATE TABLE `sale_task_defaults` (
  `sale_task_defaults_id` smallint(6) NOT NULL,
  `sale_task_defaults_type` tinyint(4) DEFAULT NULL,
  `sale_task_defaults_name` varchar(100) DEFAULT NULL,
  `sale_task_defaults_status` tinyint(4) DEFAULT NULL,
  `sale_task_defaults_notes` text DEFAULT NULL,
  `sale_task_defaults_description` text DEFAULT NULL,
  `sale_task_defaults_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_task_status`
--

CREATE TABLE `sale_task_status` (
  `sale_task_status_id` tinyint(4) NOT NULL,
  `sale_task_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_task_type`
--

CREATE TABLE `sale_task_type` (
  `sale_task_type_id` tinyint(4) NOT NULL,
  `sale_task_type_name` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sale_updates`
--

CREATE TABLE `sale_updates` (
  `sale_updates_id` int(11) NOT NULL,
  `sale_updates_sale_id` int(11) DEFAULT NULL,
  `sale_updates_public_notes` text DEFAULT NULL,
  `sale_updates_private_notes` text DEFAULT NULL,
  `sale_updates_notify_vendor` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_buyer` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_vendor_solicitor_intermediary` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_buyer_solicitor_intermediary` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_vendor_solicitor` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_buyer_solicitor` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_vendor_mortgage_advisor` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_buyer_mortgage_advisor` tinyint(4) DEFAULT NULL,
  `sale_updates_notify_sales_progression` tinyint(4) DEFAULT NULL,
  `sale_updates_date_created` datetime DEFAULT NULL,
  `sale_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `selective_licencing_licence_holder`
--

CREATE TABLE `selective_licencing_licence_holder` (
  `selective_licencing_licence_holder_id` tinyint(4) NOT NULL,
  `selective_licencing_licence_holder_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `selective_licencing_status`
--

CREATE TABLE `selective_licencing_status` (
  `selective_licencing_status_id` tinyint(4) NOT NULL,
  `selective_licencing_status_name` varchar(50) DEFAULT NULL,
  `selective_licencing_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `service_charge_status`
--

CREATE TABLE `service_charge_status` (
  `service_charge_status_id` tinyint(4) NOT NULL,
  `service_charge_status_name` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `social_media_post`
--

CREATE TABLE `social_media_post` (
  `social_media_post_id` tinyint(4) NOT NULL,
  `social_media_post_name` varchar(50) DEFAULT NULL,
  `social_media_post_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `solicitor_quotation_type`
--

CREATE TABLE `solicitor_quotation_type` (
  `solicitor_quotation_type_id` tinyint(4) NOT NULL,
  `solicitor_quotation_type_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `standing_order_payments_frequency`
--

CREATE TABLE `standing_order_payments_frequency` (
  `standing_order_payments_frequency_id` int(11) NOT NULL,
  `standing_order_payments_frequency_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `status_yes_no`
--

CREATE TABLE `status_yes_no` (
  `status_yes_no_id` int(11) NOT NULL,
  `status_yes_no_name` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status_yes_no_backup` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_yes_no_new`
--

CREATE TABLE `status_yes_no_new` (
  `status_yes_no_id` int(11) NOT NULL,
  `status_yes_no_name` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_yes_no_new_tbc`
--

CREATE TABLE `status_yes_no_new_tbc` (
  `status_yes_no_id` int(11) NOT NULL,
  `status_yes_no_name` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suburb`
--

CREATE TABLE `suburb` (
  `suburb_id` int(11) NOT NULL,
  `suburb_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `suburb_description` text DEFAULT NULL,
  `suburb_branch` int(11) DEFAULT NULL,
  `suburb_active` tinyint(1) NOT NULL DEFAULT 1,
  `suburb_property_requirements` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_status`
--

CREATE TABLE `survey_status` (
  `survey_status_id` tinyint(4) NOT NULL,
  `survey_status_name` varchar(20) DEFAULT NULL,
  `survey_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `task_date_tbc` date DEFAULT NULL,
  `task_deadline` date DEFAULT NULL,
  `task_routine` tinyint(4) DEFAULT NULL,
  `task_status` tinyint(4) DEFAULT NULL,
  `task_sort` smallint(6) DEFAULT NULL,
  `task_date_created` datetime DEFAULT NULL,
  `task_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_status`
--

CREATE TABLE `task_status` (
  `task_status_id` tinyint(4) NOT NULL,
  `task_status_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy`
--

CREATE TABLE `tenancy` (
  `tenancy_id` int(11) NOT NULL,
  `tenancy_token` varchar(40) DEFAULT NULL,
  `tenancy_type` tinyint(4) DEFAULT NULL,
  `tenancy_property` int(11) DEFAULT NULL,
  `tenancy_furnished` int(11) DEFAULT NULL,
  `tenancy_children` tinyint(4) DEFAULT NULL,
  `tenancy_pets` tinyint(4) DEFAULT NULL,
  `tenancy_smoking` tinyint(4) DEFAULT NULL,
  `tenancy_property_part` tinyint(4) DEFAULT NULL,
  `tenancy_property_part_room` int(11) DEFAULT NULL,
  `tenancy_property_part_description` text DEFAULT NULL,
  `tenancy_shared_facilities` tinyint(4) DEFAULT NULL,
  `tenancy_shared_facilities_description` text DEFAULT NULL,
  `tenancy_agreement_date` date DEFAULT NULL,
  `tenancy_start_date` date DEFAULT NULL,
  `tenancy_fixed_term` smallint(6) DEFAULT NULL,
  `tenancy_fixed_term_unit` tinyint(4) DEFAULT NULL,
  `tenancy_fixed_term_end_date` date DEFAULT NULL,
  `tenancy_rent_amount` decimal(8,2) DEFAULT NULL,
  `tenancy_rent_frequency` tinyint(4) DEFAULT NULL,
  `tenancy_rent_payable` tinyint(4) DEFAULT NULL,
  `tenancy_rent_agreement` tinyint(4) DEFAULT NULL,
  `tenancy_rent_frequency_schedule` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `tenancy_rent_payment_method` tinyint(4) DEFAULT NULL,
  `tenancy_council_pay_rent` tinyint(4) DEFAULT NULL,
  `tenancy_rent_vat_rate` tinyint(4) DEFAULT NULL,
  `tenancy_service_charge_amount` decimal(8,2) DEFAULT NULL,
  `tenancy_service_charge_frequency` tinyint(4) DEFAULT NULL,
  `tenancy_service_charge_payable` tinyint(4) DEFAULT NULL,
  `tenancy_service_charge_agreement` tinyint(4) DEFAULT NULL,
  `tenancy_service_charge_frequency_schedule` text DEFAULT NULL,
  `tenancy_service_charge_payment_method` tinyint(4) DEFAULT NULL,
  `tenancy_service_charge_vat_rate` tinyint(4) DEFAULT NULL,
  `tenancy_insurance_amount` decimal(8,2) DEFAULT NULL,
  `tenancy_insurance_frequency` tinyint(4) DEFAULT NULL,
  `tenancy_insurance_payable` tinyint(4) DEFAULT NULL,
  `tenancy_insurance_agreement` tinyint(4) DEFAULT NULL,
  `tenancy_insurance_frequency_schedule` text DEFAULT NULL,
  `tenancy_insurance_payment_method` tinyint(4) DEFAULT NULL,
  `tenancy_insurance_vat_rate` tinyint(4) DEFAULT NULL,
  `tenancy_notes` text DEFAULT NULL,
  `tenancy_agent_branch` int(11) DEFAULT NULL,
  `tenancy_agent_employee` int(11) DEFAULT NULL,
  `tenancy_letting_service` tinyint(4) DEFAULT NULL,
  `tenancy_tenant_find_fee` decimal(10,2) DEFAULT NULL,
  `tenancy_tenant_find_fee_type` tinyint(4) DEFAULT NULL,
  `tenancy_management_fee` decimal(10,2) DEFAULT NULL,
  `tenancy_management_fee_type` tinyint(4) DEFAULT NULL,
  `tenancy_gas` tinyint(4) DEFAULT NULL,
  `tenancy_electricity` tinyint(4) DEFAULT NULL,
  `tenancy_water` tinyint(4) DEFAULT NULL,
  `tenancy_oil` tinyint(4) DEFAULT NULL,
  `tenancy_telephone` tinyint(4) DEFAULT NULL,
  `tenancy_broadband` tinyint(4) DEFAULT NULL,
  `tenancy_tv_licence` tinyint(4) DEFAULT NULL,
  `tenancy_sat_cable_tv` tinyint(4) DEFAULT NULL,
  `tenancy_council_tax` tinyint(4) DEFAULT NULL,
  `tenancy_deposit_required` tinyint(4) DEFAULT NULL,
  `tenancy_deposit_amount` decimal(8,2) DEFAULT NULL,
  `tenancy_status` tinyint(4) DEFAULT NULL,
  `tenancy_renewal_status` tinyint(4) DEFAULT 4,
  `tenancy_renewal_notes` text DEFAULT NULL,
  `tenancy_renewal_employee` int(11) DEFAULT NULL,
  `tenancy_is_renewal_id` int(11) DEFAULT NULL,
  `tenancy_is_renewal` tinyint(4) DEFAULT 2,
  `tenancy_tnts_vacation_date` date DEFAULT NULL,
  `tenancy_official_end_date` date DEFAULT NULL,
  `tenancy_move_out_reason` tinyint(4) DEFAULT NULL,
  `tenancy_move_out_notes` text DEFAULT NULL,
  `tenancy_tenant_find_with_management_fee` decimal(7,2) DEFAULT NULL,
  `tenancy_tenant_find_with_management_fee_type` tinyint(4) DEFAULT NULL,
  `tenancy_overdue_tc_reminders` tinyint(4) NOT NULL DEFAULT 1,
  `tenancy_student` tinyint(4) DEFAULT NULL,
  `tenancy_inspection_frequency` tinyint(4) DEFAULT NULL,
  `tenancy_last_inspection_date` date DEFAULT NULL,
  `tenancy_last_inspection_date_backup` date DEFAULT NULL,
  `tenancy_move_out_employee` int(11) DEFAULT NULL,
  `tenancy_inventory_ingoing_link` text DEFAULT NULL,
  `tenancy_inventory_outgoing_link` text DEFAULT NULL,
  `tenancy_notice_expiry_date` date DEFAULT NULL,
  `tenancy_accounts_next_review_date` date DEFAULT NULL,
  `tenancy_viewings_permitted` tinyint(4) DEFAULT NULL,
  `tenancy_date_created` datetime DEFAULT NULL,
  `tenancy_date_updated` datetime DEFAULT NULL,
  `tenancy_created_by` int(11) DEFAULT NULL,
  `tenancy_updated_by` int(11) DEFAULT NULL,
  `tenancy_management_takeover` tinyint(4) DEFAULT NULL,
  `tenancy_management_takeover_date` date DEFAULT NULL,
  `tenancy_management_takeover_notes` text DEFAULT NULL,
  `tenancy_periodic_rent_increase_negotiator` int(11) DEFAULT NULL,
  `tenancy_rlei_opt_out_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Triggers `tenancy`
--
DELIMITER $$
CREATE TRIGGER `tenancy_logs_update` AFTER UPDATE ON `tenancy` FOR EACH ROW BEGIN
IF (OLD.tenancy_rent_amount!=NEW.tenancy_rent_amount) THEN
INSERT INTO tenancy_log_rent (tenancy_log_rent_tenancy_id, tenancy_rent_old, tenancy_rent_new, tenancy_log_rent_updated_by, tenancy_log_rent_date_updated)
VALUES (NEW.tenancy_id, OLD.tenancy_rent_amount, NEW.tenancy_rent_amount, NEW.tenancy_updated_by, NEW.tenancy_date_updated);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_additional_clauses`
--

CREATE TABLE `tenancy_additional_clauses` (
  `tenancy_additional_clauses_id` int(11) NOT NULL,
  `tenancy_additional_clauses_description` text DEFAULT NULL,
  `tenancy_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_allowed_occupant`
--

CREATE TABLE `tenancy_allowed_occupant` (
  `tenancy_allowed_occupant_id` int(11) NOT NULL,
  `tenancy_id` int(11) DEFAULT NULL,
  `tenancy_allowed_occupant_title` tinyint(4) DEFAULT NULL,
  `tenancy_allowed_occupant_first_name` varchar(255) DEFAULT NULL,
  `tenancy_allowed_occupant_surname` varchar(255) DEFAULT NULL,
  `tenancy_allowed_occupant_phone_number` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `tenancy_allowed_occupant_email_address` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_deposit_contributor`
--

CREATE TABLE `tenancy_deposit_contributor` (
  `tenancy_deposit_contributor_id` int(11) NOT NULL,
  `tenancy_deposit_contributor_title` tinyint(4) DEFAULT NULL,
  `tenancy_deposit_contributor_first_name` varchar(255) NOT NULL,
  `tenancy_deposit_contributor_surname` varchar(255) DEFAULT NULL,
  `tenancy_deposit_contributor_amount` decimal(8,2) DEFAULT NULL,
  `tenancy_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_deposit_protection_responsible`
--

CREATE TABLE `tenancy_deposit_protection_responsible` (
  `tenancy_deposit_protection_responsible_id` tinyint(4) NOT NULL,
  `tenancy_deposit_protection_responsible_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_deposit_protection_scheme`
--

CREATE TABLE `tenancy_deposit_protection_scheme` (
  `tenancy_deposit_protection_scheme_id` int(11) NOT NULL,
  `tenancy_deposit_protection_scheme_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_expiry_status`
--

CREATE TABLE `tenancy_expiry_status` (
  `tenancy_expiry_status_id` tinyint(4) NOT NULL,
  `tenancy_expiry_status_name` varchar(60) DEFAULT NULL,
  `tenancy_expiry_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_fixed_term_unit`
--

CREATE TABLE `tenancy_fixed_term_unit` (
  `tenancy_fixed_term_unit_id` tinyint(4) NOT NULL,
  `tenancy_fixed_term_unit_name` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_guarantors`
--

CREATE TABLE `tenancy_guarantors` (
  `tenancy_guarantors_id` int(11) NOT NULL,
  `guarantor_id` int(11) DEFAULT NULL,
  `tenancy_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_inspection_frequency`
--

CREATE TABLE `tenancy_inspection_frequency` (
  `tenancy_inspection_frequency_id` tinyint(4) NOT NULL,
  `tenancy_inspection_frequency_name` varchar(15) DEFAULT NULL,
  `tenancy_inspection_frequency_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_inspection_status`
--

CREATE TABLE `tenancy_inspection_status` (
  `tenancy_inspection_status_id` tinyint(4) NOT NULL,
  `tenancy_inspection_status_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_log_rent`
--

CREATE TABLE `tenancy_log_rent` (
  `tenancy_log_rent_id` int(11) NOT NULL,
  `tenancy_log_rent_tenancy_id` int(11) DEFAULT NULL,
  `tenancy_rent_old` decimal(11,2) DEFAULT NULL,
  `tenancy_rent_new` decimal(11,2) DEFAULT NULL,
  `tenancy_log_rent_notes` text DEFAULT NULL,
  `tenancy_log_rent_date_updated` date DEFAULT NULL,
  `tenancy_log_rent_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_move_out_reason`
--

CREATE TABLE `tenancy_move_out_reason` (
  `tenancy_move_out_reason_id` tinyint(4) NOT NULL,
  `tenancy_move_out_reason_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_payment_method`
--

CREATE TABLE `tenancy_payment_method` (
  `tenancy_payment_method_id` tinyint(4) NOT NULL,
  `tenancy_payment_method_name` varchar(30) DEFAULT NULL,
  `tenancy_payment_method_description` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_property_part`
--

CREATE TABLE `tenancy_property_part` (
  `tenancy_property_part_id` tinyint(4) NOT NULL,
  `tenancy_property_part_name` varchar(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_renewal_status`
--

CREATE TABLE `tenancy_renewal_status` (
  `tenancy_renewal_status_id` tinyint(4) NOT NULL,
  `tenancy_renewal_status_name` varchar(50) DEFAULT NULL,
  `tenancy_renewal_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_renewal_updates`
--

CREATE TABLE `tenancy_renewal_updates` (
  `tenancy_renewal_updates_id` int(11) NOT NULL,
  `tenancy_renewal_updates_tenancy_id` int(11) DEFAULT NULL,
  `tenancy_renewal_updates_public_notes` text DEFAULT NULL,
  `tenancy_renewal_updates_private_notes` text DEFAULT NULL,
  `tenancy_renewal_updates_notify_landlord` tinyint(4) DEFAULT NULL,
  `tenancy_renewal_updates_notify_tenants` tinyint(4) DEFAULT NULL,
  `tenancy_renewal_updates_notify_accounts` tinyint(4) DEFAULT NULL,
  `tenancy_renewal_updates_date_created` datetime DEFAULT NULL,
  `tenancy_renewal_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_rent_agreement`
--

CREATE TABLE `tenancy_rent_agreement` (
  `tenancy_rent_agreement_id` tinyint(4) NOT NULL,
  `tenancy_rent_agreement_name` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_rent_frequency`
--

CREATE TABLE `tenancy_rent_frequency` (
  `tenancy_rent_frequency_id` tinyint(4) NOT NULL,
  `tenancy_rent_frequency_name` varchar(25) DEFAULT NULL,
  `tenancy_rent_frequency_sort` tinyint(4) DEFAULT NULL,
  `tenancy_rent_frequency_description` text DEFAULT NULL,
  `tenancy_rent_frequency_short` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_responsible`
--

CREATE TABLE `tenancy_responsible` (
  `tenancy_responsible_id` int(11) NOT NULL,
  `tenancy_responsible_name` varchar(35) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_soc_grade`
--

CREATE TABLE `tenancy_soc_grade` (
  `tenancy_soc_grade_id` tinyint(11) NOT NULL,
  `tenancy_soc_grade_name` varchar(25) DEFAULT NULL,
  `tenancy_soc_grade_description` text DEFAULT NULL,
  `tenancy_soc_grade_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_status`
--

CREATE TABLE `tenancy_status` (
  `tenancy_status_id` tinyint(4) NOT NULL,
  `tenancy_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_tenants`
--

CREATE TABLE `tenancy_tenants` (
  `tenancy_tenants_id` int(11) NOT NULL,
  `tenant_id` int(11) DEFAULT NULL,
  `tenancy_id` int(11) DEFAULT NULL,
  `tenant_lead` tinyint(4) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_term_status`
--

CREATE TABLE `tenancy_term_status` (
  `tenancy_term_status_id` tinyint(4) NOT NULL,
  `tenancy_term_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenancy_updates`
--

CREATE TABLE `tenancy_updates` (
  `tenancy_updates_id` int(11) NOT NULL,
  `tenancy_updates_tenancy_id` int(11) DEFAULT NULL,
  `tenancy_updates_public_notes` text DEFAULT NULL,
  `tenancy_updates_private_notes` text DEFAULT NULL,
  `tenancy_updates_notify_tenants` tinyint(4) DEFAULT NULL,
  `tenancy_updates_notify_landlord` tinyint(4) DEFAULT NULL,
  `tenancy_updates_notify_accounts` tinyint(4) DEFAULT NULL,
  `tenancy_updates_date_created` datetime DEFAULT NULL,
  `tenancy_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(11) NOT NULL,
  `tenant_token` varchar(40) DEFAULT NULL,
  `tenant_type` tinyint(4) DEFAULT NULL,
  `tenant_title` tinyint(4) DEFAULT NULL,
  `tenant_first_name` varchar(30) DEFAULT NULL,
  `tenant_surname` varchar(30) DEFAULT NULL,
  `tenant_company_name` varchar(255) DEFAULT NULL,
  `tenant_company_trading_name` varchar(255) DEFAULT NULL,
  `tenant_company_contact_name` varchar(255) DEFAULT NULL,
  `tenant_company_registration_number` varchar(10) DEFAULT NULL,
  `tenant_company_vat_registration_number` varchar(20) DEFAULT NULL,
  `tenant_phone_home` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `tenant_phone_work` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `tenant_phone_mobile` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `tenant_fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_email_accounts` varchar(255) DEFAULT NULL,
  `tenant_email_works` varchar(255) DEFAULT NULL,
  `tenant_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_suburb` varchar(255) DEFAULT NULL,
  `tenant_town_city` varchar(255) DEFAULT NULL,
  `tenant_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_country` int(11) DEFAULT NULL,
  `tenant_forwarding_property_number_name` varchar(50) DEFAULT NULL,
  `tenant_forwarding_apartment_number_name` varchar(50) DEFAULT NULL,
  `tenant_forwarding_address_line_1` varchar(255) DEFAULT NULL,
  `tenant_forwarding_address_line_2` varchar(255) DEFAULT NULL,
  `tenant_forwarding_suburb` varchar(255) DEFAULT NULL,
  `tenant_forwarding_town_city` varchar(255) DEFAULT NULL,
  `tenant_forwarding_postcode` varchar(8) DEFAULT NULL,
  `tenant_forwarding_country` int(11) DEFAULT NULL,
  `tenant_dob` date DEFAULT NULL,
  `tenant_passport_number` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_bank_name` tinyint(4) DEFAULT NULL,
  `tenant_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tenant_date_created` datetime DEFAULT NULL,
  `tenant_date_updated` datetime DEFAULT NULL,
  `tenant_created_by` int(11) DEFAULT NULL,
  `tenant_updated_by` int(11) DEFAULT NULL,
  `tenant_online_account` tinyint(4) DEFAULT NULL,
  `tenant_online_login_username` varchar(255) DEFAULT NULL,
  `tenant_online_login_password` varchar(255) DEFAULT NULL,
  `tenant_online_account_password_reset_token` varchar(40) DEFAULT NULL,
  `tenant_nino` varchar(13) DEFAULT NULL,
  `tenant_employment_status` tinyint(4) DEFAULT NULL,
  `tenant_employer_name` varchar(255) DEFAULT NULL,
  `tenant_income` decimal(9,2) DEFAULT NULL,
  `tenant_income_frequency` tinyint(4) DEFAULT NULL,
  `tenant_driving_licence_number` varchar(20) DEFAULT NULL,
  `tenant_employment_income_notes` text DEFAULT NULL,
  `tenant_referencing_provider` int(11) DEFAULT NULL,
  `tenant_referencing_provider_reference` varchar(20) DEFAULT NULL,
  `tenant_branch` int(11) DEFAULT NULL,
  `tenant_right_to_rent_review_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenant_income`
--

CREATE TABLE `tenant_income` (
  `tenant_income_id` int(11) NOT NULL,
  `tenant_income_tenant_id` int(11) DEFAULT NULL,
  `tenant_income_amount` decimal(10,2) DEFAULT NULL,
  `tenant_income_frequency` tinyint(4) DEFAULT NULL,
  `tenant_income_source` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_field` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timescale`
--

CREATE TABLE `timescale` (
  `timescale_id` tinyint(4) NOT NULL,
  `timescale_name` varchar(30) DEFAULT NULL,
  `timescale_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_id` tinyint(4) NOT NULL,
  `title_name` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `town_city_delete`
--

CREATE TABLE `town_city_delete` (
  `town_city_id` int(11) NOT NULL,
  `town_city_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `utility_id` tinyint(4) NOT NULL,
  `utility_name` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `utility_meter`
--

CREATE TABLE `utility_meter` (
  `utility_meter_id` int(11) NOT NULL,
  `utility_meter_property` int(11) DEFAULT NULL,
  `utility_meter_utility` tinyint(4) DEFAULT NULL,
  `utility_meter_type` tinyint(4) DEFAULT NULL,
  `utility_meter_location` tinyint(4) DEFAULT NULL,
  `utility_meter_notes` varchar(255) DEFAULT NULL,
  `utility_meter_provider` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `utility_meter_location`
--

CREATE TABLE `utility_meter_location` (
  `utility_meter_location_id` tinyint(4) NOT NULL,
  `utility_meter_location_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `utility_meter_type`
--

CREATE TABLE `utility_meter_type` (
  `utility_meter_type_id` tinyint(4) NOT NULL,
  `utility_meter_type_name` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `utility_provider`
--

CREATE TABLE `utility_provider` (
  `utility_provider_id` int(11) NOT NULL,
  `utility_provider_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation`
--

CREATE TABLE `valuation` (
  `valuation_id` int(11) NOT NULL,
  `valuation_title` tinyint(4) DEFAULT NULL,
  `valuation_first_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_surname` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_capacity` tinyint(4) DEFAULT NULL,
  `valuation_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_home` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_work` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_mobile` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_home_address_property_apartment_number_name` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_number_name` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_1` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_suburb` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_town_city` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_postcode` varchar(8) DEFAULT NULL,
  `valuation_home_address_property_country` int(11) DEFAULT NULL,
  `valuation_property_apartment_number_name` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_property_number_name` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_property_address_line_1` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_property_address_line_2` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_property_suburb` varchar(60) DEFAULT NULL,
  `valuation_property_town_city` varchar(60) DEFAULT NULL,
  `valuation_property_postcode` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_property_country` int(11) DEFAULT NULL,
  `valuation_property_availability` tinyint(4) DEFAULT NULL,
  `valuation_property_category` tinyint(4) DEFAULT NULL,
  `valuation_property_type` int(11) DEFAULT NULL,
  `valuation_property_no_bedrooms` tinyint(4) DEFAULT NULL,
  `valuation_property_no_bathrooms` tinyint(4) DEFAULT NULL,
  `valuation_property_no_receptions` tinyint(4) DEFAULT NULL,
  `valuation_property_price_from` decimal(11,2) DEFAULT NULL,
  `valuation_property_price_to` decimal(11,2) DEFAULT NULL,
  `valuation_property_price_asking` decimal(11,2) DEFAULT NULL,
  `valuation_price_qualifier` tinyint(4) DEFAULT NULL,
  `valuation_branch` int(11) DEFAULT NULL,
  `valuation_employee` int(11) DEFAULT NULL,
  `valuation_negotiator` int(11) DEFAULT NULL,
  `valuation_status` tinyint(4) DEFAULT NULL,
  `valuation_lost_reason` tinyint(4) DEFAULT NULL,
  `valuation_notes` text DEFAULT NULL,
  `valuation_notes_private` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_value_notes` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_next_review_date` date DEFAULT NULL,
  `valuation_next_review_date_negotiator` date DEFAULT NULL,
  `valuation_next_review_date_lister` date DEFAULT NULL,
  `valuation_next_review_date_lister_notes` text DEFAULT NULL,
  `valuation_lead_source` tinyint(4) DEFAULT NULL,
  `valuation_lead_source_notes` text DEFAULT NULL,
  `valuation_occupancy` tinyint(4) DEFAULT NULL,
  `valuation_reason` tinyint(4) DEFAULT NULL,
  `valuation_lost_to` int(11) DEFAULT NULL,
  `valuation_lost_sale_fee` decimal(7,2) DEFAULT NULL,
  `valuation_lost_sale_fee_type` tinyint(4) DEFAULT NULL,
  `valuation_property_price_marketed` decimal(11,2) DEFAULT NULL,
  `valuation_price_qualifier_marketed` tinyint(4) DEFAULT NULL,
  `valuation_tenure_type` tinyint(4) DEFAULT NULL,
  `valuation_sale_fee` decimal(7,2) NOT NULL DEFAULT 1.00,
  `valuation_sale_fee_type` tinyint(4) NOT NULL DEFAULT 7,
  `valuation_tenant_find_fee` decimal(7,2) NOT NULL DEFAULT 62.50,
  `valuation_tenant_find_fee_type` tinyint(4) NOT NULL DEFAULT 3,
  `valuation_tenant_find_with_management_fee` decimal(7,2) NOT NULL DEFAULT 332.50,
  `valuation_tenant_find_with_management_fee_type` tinyint(4) NOT NULL DEFAULT 1,
  `valuation_management_fee` decimal(7,2) NOT NULL DEFAULT 10.00,
  `valuation_management_fee_type` tinyint(4) NOT NULL DEFAULT 2,
  `valuation_to_landlord` int(11) DEFAULT NULL,
  `valuation_to_vendor` int(11) DEFAULT NULL,
  `valuation_to_property` int(11) DEFAULT NULL,
  `valuation_condition` tinyint(4) DEFAULT NULL,
  `valuation_contract_type` int(11) DEFAULT NULL,
  `valuation_multi_agent` int(11) DEFAULT NULL,
  `valuation_multi_agent_notes` text DEFAULT NULL,
  `valuation_multi_agent_withdrawal_date` date DEFAULT NULL,
  `valuation_instruct_epc` tinyint(4) DEFAULT NULL,
  `valuation_photographer` int(11) DEFAULT NULL,
  `valuation_photographer_access` tinyint(4) DEFAULT NULL,
  `valuation_minimum_contract_period` varchar(2) NOT NULL DEFAULT '0',
  `valuation_letting_service` tinyint(4) DEFAULT NULL,
  `valuation_lister` int(11) DEFAULT NULL,
  `valuation_instruction_override` tinyint(4) NOT NULL DEFAULT 2,
  `valuation_instruct_video` tinyint(4) DEFAULT NULL,
  `valuation_recommendations` text DEFAULT NULL,
  `valuation_date_created` datetime DEFAULT NULL,
  `valuation_date_updated` datetime DEFAULT NULL,
  `valuation_created_by` int(11) DEFAULT NULL,
  `valuation_updated_by` int(11) DEFAULT NULL,
  `valuation_title_2` tinyint(4) DEFAULT NULL,
  `valuation_first_name_2` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_surname_2` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_email_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_home_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_work_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_mobile_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_home_address_property_apartment_number_name_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_number_name_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_1_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_2_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_suburb_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_town_city_2` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_postcode_2` varchar(8) DEFAULT NULL,
  `valuation_home_address_property_country_2` int(11) DEFAULT NULL,
  `valuation_title_3` tinyint(4) DEFAULT NULL,
  `valuation_first_name_3` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_surname_3` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_email_3` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_home_3` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_work_3` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_mobile_3` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_home_address_property_apartment_number_name_3` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_number_name_3` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_1_3` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_2_3` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_suburb_3` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_town_city_3` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_postcode_3` varchar(8) DEFAULT NULL,
  `valuation_home_address_property_country_3` int(11) DEFAULT NULL,
  `valuation_title_4` tinyint(4) DEFAULT NULL,
  `valuation_first_name_4` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_surname_4` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_email_4` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_home_4` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_work_4` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_phone_mobile_4` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_home_address_property_apartment_number_name_4` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_number_name_4` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_1_4` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_address_line_2_4` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_suburb_4` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_town_city_4` varchar(60) DEFAULT NULL,
  `valuation_home_address_property_postcode_4` varchar(8) DEFAULT NULL,
  `valuation_home_address_property_country_4` int(11) DEFAULT NULL,
  `valuation_capacity_2` tinyint(4) DEFAULT NULL,
  `valuation_capacity_3` tinyint(4) DEFAULT NULL,
  `valuation_capacity_4` tinyint(4) DEFAULT NULL,
  `valuation_referral_solicitor_notes` text DEFAULT NULL,
  `valuation_referral_mortgage_notes` text DEFAULT NULL,
  `valuation_tenant_contact_details` text DEFAULT NULL,
  `valuation_premium_price_guide_link` text DEFAULT NULL,
  `valuation_status_reason` text DEFAULT NULL,
  `valuation_email_reminders` tinyint(4) NOT NULL DEFAULT 1,
  `valuation_total_amount_paid_employee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `valuation_property_living_space` decimal(7,2) DEFAULT NULL,
  `valuation_property_living_space_unit` tinyint(4) DEFAULT NULL,
  `valuation_price_per_square_foot` smallint(6) DEFAULT NULL,
  `valuation_valuer_inherited` tinyint(1) NOT NULL DEFAULT 2,
  `valuation_ownership_period` text DEFAULT NULL,
  `valuation_extended_loft_conversion_info` text DEFAULT NULL,
  `valuation_major_improvements` text DEFAULT NULL,
  `valuation_timescale_selling` text DEFAULT NULL,
  `valuation_otm_details` text DEFAULT NULL,
  `valuation_other_vals` text DEFAULT NULL,
  `valuation_price_expectations` text DEFAULT NULL,
  `valuation_parking_arrangements` text DEFAULT NULL,
  `valuation_outdoor_space` text DEFAULT NULL,
  `valuation_instruct_video_reason` text DEFAULT NULL,
  `valuation_legal_owner_contact_details` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Triggers `valuation`
--
DELIMITER $$
CREATE TRIGGER `valuation_logs_update` AFTER UPDATE ON `valuation` FOR EACH ROW BEGIN
IF (OLD.valuation_status!=NEW.valuation_status) THEN
INSERT INTO valuation_log_status (valuation_id, valuation_status_old, valuation_status_new, valuation_updated_by, valuation_date_updated)
VALUES (NEW.valuation_id, OLD.valuation_status, NEW.valuation_status, NEW.valuation_updated_by, NEW.valuation_date_updated);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_appointment_type`
--

CREATE TABLE `valuation_appointment_type` (
  `valuation_appointment_type_id` tinyint(4) NOT NULL,
  `valuation_appointment_type_name` varchar(50) DEFAULT NULL,
  `valuation_appointment_type_subject` varchar(100) DEFAULT NULL,
  `valuation_appointment_type_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_availability`
--

CREATE TABLE `valuation_availability` (
  `valuation_availability_id` tinyint(4) NOT NULL,
  `valuation_availability_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `valuation_availability_archived` tinyint(1) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_condition`
--

CREATE TABLE `valuation_condition` (
  `valuation_condition_id` tinyint(4) NOT NULL,
  `valuation_condition_name` varchar(30) DEFAULT NULL,
  `valuation_condition_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_lead_source`
--

CREATE TABLE `valuation_lead_source` (
  `valuation_lead_source_id` tinyint(4) NOT NULL,
  `valuation_lead_source_name` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_log_status`
--

CREATE TABLE `valuation_log_status` (
  `valuation_log_status_id` int(11) NOT NULL,
  `valuation_id` int(11) DEFAULT NULL,
  `valuation_status_old` tinyint(1) DEFAULT NULL,
  `valuation_status_new` tinyint(1) DEFAULT NULL,
  `valuation_updated_by` int(11) DEFAULT NULL,
  `valuation_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_lost_reason`
--

CREATE TABLE `valuation_lost_reason` (
  `valuation_lost_reason_id` tinyint(4) NOT NULL,
  `valuation_lost_reason_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_meeting_with`
--

CREATE TABLE `valuation_meeting_with` (
  `valuation_meeting_with_id` tinyint(4) NOT NULL,
  `valuation_meeting_with_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_payments_employee`
--

CREATE TABLE `valuation_payments_employee` (
  `valuation_payments_employee_id` int(11) NOT NULL,
  `valuation_payments_employee_valuation_id` int(11) DEFAULT NULL,
  `valuation_payments_employee_payment_type` tinyint(4) DEFAULT NULL,
  `valuation_payments_employee_employee_id` int(11) DEFAULT NULL,
  `valuation_payments_employee_amount` decimal(10,2) DEFAULT NULL,
  `valuation_payments_employee_date_paid` date DEFAULT NULL,
  `valuation_payments_employee_date_created` datetime DEFAULT NULL,
  `valuation_payments_employee_date_updated` datetime DEFAULT NULL,
  `valuation_payments_employee_created_by` int(11) DEFAULT NULL,
  `valuation_payments_employee_updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_reason`
--

CREATE TABLE `valuation_reason` (
  `valuation_reason_id` tinyint(4) NOT NULL,
  `valuation_reason_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_status`
--

CREATE TABLE `valuation_status` (
  `valuation_status_id` tinyint(4) NOT NULL,
  `valuation_status_name` varchar(50) DEFAULT NULL,
  `valuation_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_task`
--

CREATE TABLE `valuation_task` (
  `valuation_task_id` int(11) NOT NULL,
  `valuation_id` int(11) DEFAULT NULL,
  `valuation_task_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `valuation_task_status` tinyint(4) DEFAULT NULL,
  `valuation_task_completed_date` date DEFAULT NULL,
  `valuation_task_notes_private` text DEFAULT NULL,
  `valuation_task_sort` tinyint(4) DEFAULT NULL,
  `valuation_task_date_updated` datetime DEFAULT NULL,
  `valuation_task_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_task_defaults`
--

CREATE TABLE `valuation_task_defaults` (
  `valuation_task_defaults_id` smallint(6) NOT NULL,
  `valuation_task_defaults_type` tinyint(4) DEFAULT NULL,
  `valuation_task_defaults_name` varchar(100) DEFAULT NULL,
  `valuation_task_defaults_status` tinyint(4) DEFAULT NULL,
  `valuation_task_defaults_notes` text DEFAULT NULL,
  `valuation_task_defaults_description` text DEFAULT NULL,
  `valuation_task_defaults_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_task_status`
--

CREATE TABLE `valuation_task_status` (
  `valuation_task_status_id` tinyint(4) NOT NULL,
  `valuation_task_status_name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_type`
--

CREATE TABLE `valuation_type` (
  `valuation_type_id` tinyint(4) NOT NULL,
  `valuation_type_name` varchar(25) DEFAULT NULL,
  `valuation_type_name2` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_updates`
--

CREATE TABLE `valuation_updates` (
  `valuation_updates_id` int(11) NOT NULL,
  `valuation_updates_valuation_id` int(11) DEFAULT NULL,
  `valuation_updates_public_notes` text DEFAULT NULL,
  `valuation_updates_private_notes` text DEFAULT NULL,
  `valuation_updates_notify_landlord_vendor` tinyint(4) DEFAULT NULL,
  `valuation_updates_date_created` datetime DEFAULT NULL,
  `valuation_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_registration` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `vehicle_make_model` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `vehicle_archived` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_token` varchar(40) DEFAULT NULL,
  `vendor_type` tinyint(4) DEFAULT NULL,
  `vendor_title` tinyint(4) DEFAULT NULL,
  `vendor_first_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_surname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_trading_name` varchar(255) DEFAULT NULL,
  `vendor_company_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_company_trading_name` varchar(255) DEFAULT NULL,
  `vendor_company_contact_name` varchar(255) DEFAULT NULL,
  `vendor_company_registration_number` varchar(10) DEFAULT NULL,
  `vendor_company_vat_registration_number` varchar(20) DEFAULT NULL,
  `vendor_company_reg_office_property_number_name` varchar(50) DEFAULT NULL,
  `vendor_company_reg_office_address_line_1` varchar(255) DEFAULT NULL,
  `vendor_company_reg_office_address_line_2` varchar(255) DEFAULT NULL,
  `vendor_company_reg_office_suburb` varchar(255) DEFAULT NULL,
  `vendor_company_reg_office_town_city` varchar(255) DEFAULT NULL,
  `vendor_company_reg_office_postcode` varchar(8) DEFAULT NULL,
  `vendor_company_reg_office_country` int(11) DEFAULT NULL,
  `vendor_phone_home` varchar(255) DEFAULT NULL,
  `vendor_phone_work` varchar(255) DEFAULT NULL,
  `vendor_phone_mobile` varchar(255) DEFAULT NULL,
  `vendor_fax` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_property_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_apartment_number_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_address_line_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_address_line_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_suburb` varchar(255) DEFAULT NULL,
  `vendor_town_city` varchar(255) DEFAULT NULL,
  `vendor_postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_country` int(11) DEFAULT NULL,
  `vendor_bank_name` tinyint(4) DEFAULT NULL,
  `vendor_bank_sort_code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_bank_account_number` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_bank_account_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_status` int(11) DEFAULT NULL,
  `vendor_lead_source` int(11) DEFAULT NULL,
  `vendor_notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_online_account` tinyint(4) DEFAULT NULL,
  `vendor_online_login_username` varchar(255) DEFAULT NULL,
  `vendor_online_login_password` varchar(255) DEFAULT NULL,
  `vendor_online_account_password_reset_token` varchar(40) DEFAULT NULL,
  `vendor_dob` date DEFAULT NULL,
  `vendor_passport_number` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vendor_driving_licence_number` varchar(20) DEFAULT NULL,
  `vendor_nino` varchar(10) DEFAULT NULL,
  `vendor_sole_sale_fee` decimal(7,2) DEFAULT NULL,
  `vendor_sole_sale_fee_type` tinyint(4) DEFAULT NULL,
  `vendor_multi_sale_fee` decimal(7,2) DEFAULT NULL,
  `vendor_multi_sale_fee_type` tinyint(4) DEFAULT NULL,
  `vendor_date_created` datetime DEFAULT NULL,
  `vendor_date_updated` datetime DEFAULT NULL,
  `vendor_created_by` int(11) DEFAULT NULL,
  `vendor_updated_by` int(11) DEFAULT NULL,
  `vendor_solicitor_company` int(11) DEFAULT NULL,
  `vendor_solicitor_company_individual` int(11) DEFAULT NULL,
  `vendor_branch` int(11) DEFAULT NULL,
  `vendor_mailing_list` tinyint(4) DEFAULT NULL,
  `vendor_fees_notes` text DEFAULT NULL,
  `vendor_capacity` tinyint(4) DEFAULT NULL,
  `vendor_deceased` tinyint(4) NOT NULL DEFAULT 2,
  `vendor_emails_new_viewing` tinyint(4) NOT NULL DEFAULT 1,
  `vendor_emails_edit_viewing` tinyint(4) NOT NULL DEFAULT 1,
  `vendor_emails_feedback` tinyint(4) NOT NULL DEFAULT 1,
  `vendor_emails_property_performance_review` tinyint(4) NOT NULL DEFAULT 1,
  `vendor_emails_new_offer` tinyint(4) NOT NULL DEFAULT 1,
  `vendor_emails_edit_offer` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_status`
--

CREATE TABLE `vendor_status` (
  `vendor_status_id` int(11) NOT NULL,
  `vendor_status_name` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_search`
--

CREATE TABLE `website_search` (
  `website_search_id` int(11) NOT NULL,
  `website_search_locations` varchar(255) DEFAULT NULL,
  `website_search_date_added` datetime DEFAULT NULL,
  `website_search_longitude` decimal(11,8) DEFAULT NULL,
  `website_search_latitude` decimal(11,8) DEFAULT NULL,
  `website_search_type` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `wins`
--

CREATE TABLE `wins` (
  `win_id` int(11) NOT NULL,
  `win_name` text DEFAULT NULL,
  `win_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `works_id` int(11) NOT NULL,
  `works_property` int(11) DEFAULT NULL,
  `works_development` int(11) DEFAULT NULL,
  `works_category` tinyint(4) DEFAULT NULL,
  `works_contractor` int(11) DEFAULT NULL,
  `works_description` text DEFAULT NULL,
  `works_outcome` text DEFAULT NULL,
  `works_notes` text DEFAULT NULL,
  `works_private_notes` text DEFAULT NULL,
  `works_cancellation_reason` text DEFAULT NULL,
  `works_contractor_quote` text DEFAULT NULL,
  `works_contractor_cost` decimal(10,2) DEFAULT NULL,
  `works_agency_invoice_id` varchar(50) DEFAULT NULL,
  `works_status` tinyint(4) DEFAULT NULL,
  `works_room` tinyint(4) DEFAULT NULL,
  `works_reminders` tinyint(4) NOT NULL DEFAULT 1,
  `works_date_created` datetime DEFAULT NULL,
  `works_date_updated` datetime DEFAULT NULL,
  `works_date_last_instructed` datetime DEFAULT NULL,
  `works_date_last_awaiting_landlord_approval` datetime DEFAULT NULL,
  `works_date_last_awaiting_landlord_payment` datetime DEFAULT NULL,
  `works_date_last_pending` datetime DEFAULT NULL,
  `works_created_by` int(11) DEFAULT NULL,
  `works_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Triggers `works`
--
DELIMITER $$
CREATE TRIGGER `Works Status Change` AFTER UPDATE ON `works` FOR EACH ROW BEGIN
IF (OLD.works_status!=NEW.works_status) THEN
INSERT INTO works_log_status (works_id, works_status_old, works_status_new, works_updated_by, works_date_updated)
VALUES (NEW.works_id, OLD.works_status, NEW.works_status, NEW.works_updated_by, NEW.works_date_updated);
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `works_logs_edit` AFTER UPDATE ON `works` FOR EACH ROW BEGIN
IF (OLD.works_status!=NEW.works_status) THEN
INSERT INTO works_updates (works_updates_works_id, works_updates_private_notes, works_updates_notify_landlords, works_updates_notify_tenants, works_updates_notify_contractor, works_updates_date_created, works_updates_created_by)
VALUES (NEW.works_id, CONCAT('AutoNewStatus:', NEW.works_status), '0', '0', '0', NEW.works_date_updated, NEW.works_updated_by);
END IF;
IF (OLD.works_contractor!=NEW.works_contractor) THEN
INSERT INTO works_updates (works_updates_works_id, works_updates_private_notes, works_updates_notify_landlords, works_updates_notify_tenants, works_updates_notify_contractor, works_updates_date_created, works_updates_created_by)
VALUES (NEW.works_id, CONCAT('AutoNewContractor:', NEW.works_contractor), '0', '0', '0', NEW.works_date_updated, NEW.works_updated_by);
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `works_logs_new` AFTER INSERT ON `works` FOR EACH ROW BEGIN
INSERT INTO works_updates (works_updates_works_id, works_updates_private_notes, works_updates_notify_landlords, works_updates_notify_tenants, works_updates_notify_contractor, works_updates_date_created, works_updates_created_by)
VALUES (NEW.works_id, CONCAT('AutoOriginalStatus:', NEW.works_status), '0', '0', '0', NEW.works_date_updated, NEW.works_updated_by);
INSERT INTO works_updates (works_updates_works_id, works_updates_private_notes, works_updates_notify_landlords, works_updates_notify_tenants, works_updates_notify_contractor, works_updates_date_created, works_updates_created_by)
VALUES (NEW.works_id, CONCAT('AutoOriginalContractor:', NEW.works_contractor), '0', '0', '0', NEW.works_date_updated, NEW.works_updated_by);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `works_category`
--

CREATE TABLE `works_category` (
  `works_category_id` tinyint(4) NOT NULL,
  `works_category_name` varchar(50) DEFAULT NULL,
  `works_category_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `works_files`
--

CREATE TABLE `works_files` (
  `works_files_id` int(11) NOT NULL,
  `works_id` int(11) DEFAULT NULL,
  `works_files_filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `works_files_caption` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `works_files_date_added` datetime DEFAULT NULL,
  `works_files_sort` mediumint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `works_log_status`
--

CREATE TABLE `works_log_status` (
  `works_log_status_id` int(11) NOT NULL,
  `works_id` int(11) DEFAULT NULL,
  `works_status_old` tinyint(1) DEFAULT NULL,
  `works_status_new` tinyint(1) DEFAULT NULL,
  `works_updated_by` int(11) DEFAULT NULL,
  `works_date_updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works_room`
--

CREATE TABLE `works_room` (
  `works_room_id` tinyint(4) NOT NULL,
  `works_room_name` varchar(50) DEFAULT NULL,
  `works_room_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `works_status`
--

CREATE TABLE `works_status` (
  `works_status_id` tinyint(4) NOT NULL,
  `works_status_name` varchar(40) DEFAULT NULL,
  `works_status_sort` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `works_updates`
--

CREATE TABLE `works_updates` (
  `works_updates_id` int(11) NOT NULL,
  `works_updates_works_id` int(11) DEFAULT NULL,
  `works_updates_public_notes` text DEFAULT NULL,
  `works_updates_private_notes` text DEFAULT NULL,
  `works_updates_notify_landlords` tinyint(4) DEFAULT NULL,
  `works_updates_notify_tenants` tinyint(4) DEFAULT NULL,
  `works_updates_notify_contractor` tinyint(4) DEFAULT NULL,
  `works_updates_notify_works_dept` tinyint(4) DEFAULT NULL,
  `works_updates_date_created` datetime DEFAULT NULL,
  `works_updates_created_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
