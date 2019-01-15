<?php

class CacheApc extends CacheApcCore {};
abstract class Cache extends CacheCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheXcache extends CacheXcacheCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Profile extends ProfileCore {};
class Message extends MessageCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbQuery extends DbQueryCore {};
abstract class Db extends DbCore {};
class DbPDO extends DbPDOCore {};
class SupplierAddress extends SupplierAddressCore {};
class CSV extends CSVCore {};
class Pack extends PackCore {};
class HelperView extends HelperViewCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class Helper extends HelperCore {};
class HelperKpi extends HelperKpiCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperList extends HelperListCore {};
class HelperShop extends HelperShopCore {};
class HelperForm extends HelperFormCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperOptions extends HelperOptionsCore {};
class ProductDownload extends ProductDownloadCore {};
class ImageType extends ImageTypeCore {};
class CMS extends CMSCore {};
class Category extends CategoryCore {};
class Cart extends CartCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Gender extends GenderCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Risk extends RiskCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class FormField extends FormFieldCore {};
class Combination extends CombinationCore {};
class GroupLang extends GroupLangCore {};
class RiskLang extends RiskLangCore {};
class CarrierLang extends CarrierLangCore {};
class GenderLang extends GenderLangCore {};
class ContactLang extends ContactLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class ThemeLang extends ThemeLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class DataLang extends DataLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class ProfileLang extends ProfileLangCore {};
class FeatureLang extends FeatureLangCore {};
class TabLang extends TabLangCore {};
class MetaLang extends MetaLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class CategoryLang extends CategoryLangCore {};
class AttributeLang extends AttributeLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class Carrier extends CarrierCore {};
class Tools extends ToolsCore {};
class FeatureValue extends FeatureValueCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class Module extends ModuleCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGrid extends ModuleGridCore {};
class Context extends ContextCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class Customization extends CustomizationCore {};
class RequestSql extends RequestSqlCore {};
class CMSRole extends CMSRoleCore {};
class Chart extends ChartCore {};
class Store extends StoreCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class Contact extends ContactCore {};
class LocalizationPack extends LocalizationPackCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceKey extends WebserviceKeyCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderMessage extends OrderMessageCore {};
class OrderState extends OrderStateCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderSlip extends OrderSlipCore {};
class Order extends OrderCore {};
class OrderReturn extends OrderReturnCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderDetail extends OrderDetailCore {};
class Image extends ImageCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class Hook extends HookCore {};
class Tag extends TagCore {};
class CustomerMessage extends CustomerMessageCore {};
class AddressFormat extends AddressFormatCore {};
class Cookie extends CookieCore {};
class ImageManager extends ImageManagerCore {};
class Translate extends TranslateCore {};
class CustomerThread extends CustomerThreadCore {};
class Upgrader extends UpgraderCore {};
class Guest extends GuestCore {};
class AttributeGroup extends AttributeGroupCore {};
class CustomerAddress extends CustomerAddressCore {};
class Manufacturer extends ManufacturerCore {};
class Page extends PageCore {};
class Uploader extends UploaderCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class SpecificPrice extends SpecificPriceCore {};
class ShopGroup extends ShopGroupCore {};
class Shop extends ShopCore {};
class ShopUrl extends ShopUrlCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class CartRule extends CartRuleCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Attachment extends AttachmentCore {};
class Supplier extends SupplierCore {};
class Curve extends CurveCore {};
class Currency extends CurrencyCore {};
class FileUploader extends FileUploaderCore {};
class Customer extends CustomerCore {};
class CMSCategory extends CMSCategoryCore {};
class ProductSale extends ProductSaleCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Search extends SearchCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class PDF extends PDFCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class PDFGenerator extends PDFGeneratorCore {};
class CartChecksum extends CartChecksumCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class Validate extends ValidateCore {};
class Group extends GroupCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Alias extends AliasCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
abstract class Controller extends ControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class FrontController extends FrontControllerCore {};
class AdminController extends AdminControllerCore {};
class Referrer extends ReferrerCore {};
class Dispatcher extends DispatcherCore {};
class Meta extends MetaCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class Delivery extends DeliveryCore {};
class ProductAssembler extends ProductAssemblerCore {};
class CssMinifier extends CssMinifierCore {};
class CccReducer extends CccReducerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class StylesheetManager extends StylesheetManagerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class Link extends LinkCore {};
class CustomizationField extends CustomizationFieldCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Tree extends TreeCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class Feature extends FeatureCore {};
class GroupReduction extends GroupReductionCore {};
class AddressChecksum extends AddressChecksumCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class Warehouse extends WarehouseCore {};
class SupplyOrder extends SupplyOrderCore {};
class StockAvailable extends StockAvailableCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockMvtReason extends StockMvtReasonCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockMvt extends StockMvtCore {};
class Stock extends StockCore {};
class StockMvtWS extends StockMvtWSCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class LinkProxy extends LinkProxyCore {};
class Country extends CountryCore {};
class QuickAccess extends QuickAccessCore {};
class Address extends AddressCore {};
class Windows extends WindowsCore {};
class Employee extends EmployeeCore {};
class Attribute extends AttributeCore {};
class Notification extends NotificationCore {};
class Tab extends TabCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class ProductSupplier extends ProductSupplierCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class Tax extends TaxCore {};
class TaxConfiguration extends TaxConfigurationCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRule extends TaxRuleCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class Configuration extends ConfigurationCore {};
class DateRange extends DateRangeCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
abstract class ObjectModel extends ObjectModelCore {};
class Product extends ProductCore {};
class Access extends AccessCore {};
class Media extends MediaCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Mail extends MailCore {};
class Language extends LanguageCore {};
class Connection extends ConnectionCore {};
class Zone extends ZoneCore {};
class State extends StateCore {};
class SearchEngine extends SearchEngineCore {};