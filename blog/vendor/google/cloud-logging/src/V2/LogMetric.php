<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a logs-based metric.  The value of the metric is the
 * number of log entries that match a logs filter in a given time interval.
 * Logs-based metric can also be used to extract values from logs and create a
 * a distribution of the values. The distribution records the statistics of the
 * extracted values along with an optional histogram of the values as specified
 * by the bucket options.
 *
 * Generated from protobuf message <code>google.logging.v2.LogMetric</code>
 */
class LogMetric extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The client-assigned metric identifier.
     * Examples: `"error_count"`, `"nginx/requests"`.
     * Metric identifiers are limited to 100 characters and can include
     * only the following characters: `A-Z`, `a-z`, `0-9`, and the
     * special characters `_-.,+!*',()%/`.  The forward-slash character
     * (`/`) denotes a hierarchy of name pieces, and it cannot be the
     * first character of the name.
     * The metric identifier in this field must not be
     * [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     * However, when the metric identifier appears as the `[METRIC_ID]`
     * part of a `metric_name` API parameter, then the metric identifier
     * must be URL-encoded. Example:
     * `"projects/my-project/metrics/nginx%2Frequests"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. A description of this metric, which is used in documentation.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     * which is used to match log entries.
     * Example:
     *     "resource.type=gae_app AND severity>=ERROR"
     * The maximum length of the filter is 20000 characters.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';
    /**
     * Optional. The metric descriptor associated with the logs-based metric.
     * If unspecified, it uses a default metric descriptor with a DELTA metric
     * kind, INT64 value type, with no labels and a unit of "1". Such a metric
     * counts the number of log entries matching the `filter` expression.
     * The `name`, `type`, and `description` fields in the `metric_descriptor`
     * are output only, and is constructed using the `name` and `description`
     * field in the LogMetric.
     * To create a logs-based metric that records a distribution of log values, a
     * DELTA metric kind with a DISTRIBUTION value type must be used along with
     * a `value_extractor` expression in the LogMetric.
     * Each label in the metric descriptor must have a matching label
     * name as the key and an extractor expression as the value in the
     * `label_extractors` map.
     * The `metric_kind` and `value_type` fields in the `metric_descriptor` cannot
     * be updated once initially configured. New labels can be added in the
     * `metric_descriptor`, but existing labels cannot be modified except for
     * their description.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 5;</code>
     */
    private $metric_descriptor = null;
    /**
     * Optional. A `value_extractor` is required when using a distribution
     * logs-based metric to extract the values to record from a log entry.
     * Two functions are supported for value extraction: `EXTRACT(field)` or
     * `REGEXP_EXTRACT(field, regex)`. The argument are:
     *   1. field: The name of the log entry field from which the value is to be
     *      extracted.
     *   2. regex: A regular expression using the Google RE2 syntax
     *      (https://github.com/google/re2/wiki/Syntax) with a single capture
     *      group to extract data from the specified log entry field. The value
     *      of the field is converted to a string before applying the regex.
     *      It is an error to specify a regex that does not include exactly one
     *      capture group.
     * The result of the extraction must be convertible to a double type, as the
     * distribution always records double values. If either the extraction or
     * the conversion to double fails, then those values are not recorded in the
     * distribution.
     * Example: `REGEXP_EXTRACT(jsonPayload.request, ".*quantity=(\d+).*")`
     *
     * Generated from protobuf field <code>string value_extractor = 6;</code>
     */
    private $value_extractor = '';
    /**
     * Optional. A map from a label key string to an extractor expression which is
     * used to extract data from a log entry field and assign as the label value.
     * Each label key specified in the LabelDescriptor must have an associated
     * extractor expression in this map. The syntax of the extractor expression
     * is the same as for the `value_extractor` field.
     * The extracted value is converted to the type defined in the label
     * descriptor. If the either the extraction or the type conversion fails,
     * the label will have a default value. The default value for a string
     * label is an empty string, for an integer label its 0, and for a boolean
     * label its `false`.
     * Note that there are upper bounds on the maximum number of labels and the
     * number of active time series that are allowed in a project.
     *
     * Generated from protobuf field <code>map<string, string> label_extractors = 7;</code>
     */
    private $label_extractors;
    /**
     * Optional. The `bucket_options` are required when the logs-based metric is
     * using a DISTRIBUTION value type and it describes the bucket boundaries
     * used to create a histogram of the extracted values.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions bucket_options = 8;</code>
     */
    private $bucket_options = null;
    /**
     * Deprecated. The API version that created or updated this metric.
     * The v2 format is used by default and cannot be changed.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogMetric.ApiVersion version = 4 [deprecated = true];</code>
     */
    private $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The client-assigned metric identifier.
     *           Examples: `"error_count"`, `"nginx/requests"`.
     *           Metric identifiers are limited to 100 characters and can include
     *           only the following characters: `A-Z`, `a-z`, `0-9`, and the
     *           special characters `_-.,+!*',()%/`.  The forward-slash character
     *           (`/`) denotes a hierarchy of name pieces, and it cannot be the
     *           first character of the name.
     *           The metric identifier in this field must not be
     *           [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     *           However, when the metric identifier appears as the `[METRIC_ID]`
     *           part of a `metric_name` API parameter, then the metric identifier
     *           must be URL-encoded. Example:
     *           `"projects/my-project/metrics/nginx%2Frequests"`.
     *     @type string $description
     *           Optional. A description of this metric, which is used in documentation.
     *     @type string $filter
     *           Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     *           which is used to match log entries.
     *           Example:
     *               "resource.type=gae_app AND severity>=ERROR"
     *           The maximum length of the filter is 20000 characters.
     *     @type \Google\Api\MetricDescriptor $metric_descriptor
     *           Optional. The metric descriptor associated with the logs-based metric.
     *           If unspecified, it uses a default metric descriptor with a DELTA metric
     *           kind, INT64 value type, with no labels and a unit of "1". Such a metric
     *           counts the number of log entries matching the `filter` expression.
     *           The `name`, `type`, and `description` fields in the `metric_descriptor`
     *           are output only, and is constructed using the `name` and `description`
     *           field in the LogMetric.
     *           To create a logs-based metric that records a distribution of log values, a
     *           DELTA metric kind with a DISTRIBUTION value type must be used along with
     *           a `value_extractor` expression in the LogMetric.
     *           Each label in the metric descriptor must have a matching label
     *           name as the key and an extractor expression as the value in the
     *           `label_extractors` map.
     *           The `metric_kind` and `value_type` fields in the `metric_descriptor` cannot
     *           be updated once initially configured. New labels can be added in the
     *           `metric_descriptor`, but existing labels cannot be modified except for
     *           their description.
     *     @type string $value_extractor
     *           Optional. A `value_extractor` is required when using a distribution
     *           logs-based metric to extract the values to record from a log entry.
     *           Two functions are supported for value extraction: `EXTRACT(field)` or
     *           `REGEXP_EXTRACT(field, regex)`. The argument are:
     *             1. field: The name of the log entry field from which the value is to be
     *                extracted.
     *             2. regex: A regular expression using the Google RE2 syntax
     *                (https://github.com/google/re2/wiki/Syntax) with a single capture
     *                group to extract data from the specified log entry field. The value
     *                of the field is converted to a string before applying the regex.
     *                It is an error to specify a regex that does not include exactly one
     *                capture group.
     *           The result of the extraction must be convertible to a double type, as the
     *           distribution always records double values. If either the extraction or
     *           the conversion to double fails, then those values are not recorded in the
     *           distribution.
     *           Example: `REGEXP_EXTRACT(jsonPayload.request, ".*quantity=(\d+).*")`
     *     @type array|\Google\Protobuf\Internal\MapField $label_extractors
     *           Optional. A map from a label key string to an extractor expression which is
     *           used to extract data from a log entry field and assign as the label value.
     *           Each label key specified in the LabelDescriptor must have an associated
     *           extractor expression in this map. The syntax of the extractor expression
     *           is the same as for the `value_extractor` field.
     *           The extracted value is converted to the type defined in the label
     *           descriptor. If the either the extraction or the type conversion fails,
     *           the label will have a default value. The default value for a string
     *           label is an empty string, for an integer label its 0, and for a boolean
     *           label its `false`.
     *           Note that there are upper bounds on the maximum number of labels and the
     *           number of active time series that are allowed in a project.
     *     @type \Google\Api\Distribution\BucketOptions $bucket_options
     *           Optional. The `bucket_options` are required when the logs-based metric is
     *           using a DISTRIBUTION value type and it describes the bucket boundaries
     *           used to create a histogram of the extracted values.
     *     @type int $version
     *           Deprecated. The API version that created or updated this metric.
     *           The v2 format is used by default and cannot be changed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The client-assigned metric identifier.
     * Examples: `"error_count"`, `"nginx/requests"`.
     * Metric identifiers are limited to 100 characters and can include
     * only the following characters: `A-Z`, `a-z`, `0-9`, and the
     * special characters `_-.,+!*',()%/`.  The forward-slash character
     * (`/`) denotes a hierarchy of name pieces, and it cannot be the
     * first character of the name.
     * The metric identifier in this field must not be
     * [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     * However, when the metric identifier appears as the `[METRIC_ID]`
     * part of a `metric_name` API parameter, then the metric identifier
     * must be URL-encoded. Example:
     * `"projects/my-project/metrics/nginx%2Frequests"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The client-assigned metric identifier.
     * Examples: `"error_count"`, `"nginx/requests"`.
     * Metric identifiers are limited to 100 characters and can include
     * only the following characters: `A-Z`, `a-z`, `0-9`, and the
     * special characters `_-.,+!*',()%/`.  The forward-slash character
     * (`/`) denotes a hierarchy of name pieces, and it cannot be the
     * first character of the name.
     * The metric identifier in this field must not be
     * [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     * However, when the metric identifier appears as the `[METRIC_ID]`
     * part of a `metric_name` API parameter, then the metric identifier
     * must be URL-encoded. Example:
     * `"projects/my-project/metrics/nginx%2Frequests"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. A description of this metric, which is used in documentation.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A description of this metric, which is used in documentation.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     * which is used to match log entries.
     * Example:
     *     "resource.type=gae_app AND severity>=ERROR"
     * The maximum length of the filter is 20000 characters.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     * which is used to match log entries.
     * Example:
     *     "resource.type=gae_app AND severity>=ERROR"
     * The maximum length of the filter is 20000 characters.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The metric descriptor associated with the logs-based metric.
     * If unspecified, it uses a default metric descriptor with a DELTA metric
     * kind, INT64 value type, with no labels and a unit of "1". Such a metric
     * counts the number of log entries matching the `filter` expression.
     * The `name`, `type`, and `description` fields in the `metric_descriptor`
     * are output only, and is constructed using the `name` and `description`
     * field in the LogMetric.
     * To create a logs-based metric that records a distribution of log values, a
     * DELTA metric kind with a DISTRIBUTION value type must be used along with
     * a `value_extractor` expression in the LogMetric.
     * Each label in the metric descriptor must have a matching label
     * name as the key and an extractor expression as the value in the
     * `label_extractors` map.
     * The `metric_kind` and `value_type` fields in the `metric_descriptor` cannot
     * be updated once initially configured. New labels can be added in the
     * `metric_descriptor`, but existing labels cannot be modified except for
     * their description.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 5;</code>
     * @return \Google\Api\MetricDescriptor
     */
    public function getMetricDescriptor()
    {
        return $this->metric_descriptor;
    }

    /**
     * Optional. The metric descriptor associated with the logs-based metric.
     * If unspecified, it uses a default metric descriptor with a DELTA metric
     * kind, INT64 value type, with no labels and a unit of "1". Such a metric
     * counts the number of log entries matching the `filter` expression.
     * The `name`, `type`, and `description` fields in the `metric_descriptor`
     * are output only, and is constructed using the `name` and `description`
     * field in the LogMetric.
     * To create a logs-based metric that records a distribution of log values, a
     * DELTA metric kind with a DISTRIBUTION value type must be used along with
     * a `value_extractor` expression in the LogMetric.
     * Each label in the metric descriptor must have a matching label
     * name as the key and an extractor expression as the value in the
     * `label_extractors` map.
     * The `metric_kind` and `value_type` fields in the `metric_descriptor` cannot
     * be updated once initially configured. New labels can be added in the
     * `metric_descriptor`, but existing labels cannot be modified except for
     * their description.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 5;</code>
     * @param \Google\Api\MetricDescriptor $var
     * @return $this
     */
    public function setMetricDescriptor($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MetricDescriptor::class);
        $this->metric_descriptor = $var;

        return $this;
    }

    /**
     * Optional. A `value_extractor` is required when using a distribution
     * logs-based metric to extract the values to record from a log entry.
     * Two functions are supported for value extraction: `EXTRACT(field)` or
     * `REGEXP_EXTRACT(field, regex)`. The argument are:
     *   1. field: The name of the log entry field from which the value is to be
     *      extracted.
     *   2. regex: A regular expression using the Google RE2 syntax
     *      (https://github.com/google/re2/wiki/Syntax) with a single capture
     *      group to extract data from the specified log entry field. The value
     *      of the field is converted to a string before applying the regex.
     *      It is an error to specify a regex that does not include exactly one
     *      capture group.
     * The result of the extraction must be convertible to a double type, as the
     * distribution always records double values. If either the extraction or
     * the conversion to double fails, then those values are not recorded in the
     * distribution.
     * Example: `REGEXP_EXTRACT(jsonPayload.request, ".*quantity=(\d+).*")`
     *
     * Generated from protobuf field <code>string value_extractor = 6;</code>
     * @return string
     */
    public function getValueExtractor()
    {
        return $this->value_extractor;
    }

    /**
     * Optional. A `value_extractor` is required when using a distribution
     * logs-based metric to extract the values to record from a log entry.
     * Two functions are supported for value extraction: `EXTRACT(field)` or
     * `REGEXP_EXTRACT(field, regex)`. The argument are:
     *   1. field: The name of the log entry field from which the value is to be
     *      extracted.
     *   2. regex: A regular expression using the Google RE2 syntax
     *      (https://github.com/google/re2/wiki/Syntax) with a single capture
     *      group to extract data from the specified log entry field. The value
     *      of the field is converted to a string before applying the regex.
     *      It is an error to specify a regex that does not include exactly one
     *      capture group.
     * The result of the extraction must be convertible to a double type, as the
     * distribution always records double values. If either the extraction or
     * the conversion to double fails, then those values are not recorded in the
     * distribution.
     * Example: `REGEXP_EXTRACT(jsonPayload.request, ".*quantity=(\d+).*")`
     *
     * Generated from protobuf field <code>string value_extractor = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setValueExtractor($var)
    {
        GPBUtil::checkString($var, True);
        $this->value_extractor = $var;

        return $this;
    }

    /**
     * Optional. A map from a label key string to an extractor expression which is
     * used to extract data from a log entry field and assign as the label value.
     * Each label key specified in the LabelDescriptor must have an associated
     * extractor expression in this map. The syntax of the extractor expression
     * is the same as for the `value_extractor` field.
     * The extracted value is converted to the type defined in the label
     * descriptor. If the either the extraction or the type conversion fails,
     * the label will have a default value. The default value for a string
     * label is an empty string, for an integer label its 0, and for a boolean
     * label its `false`.
     * Note that there are upper bounds on the maximum number of labels and the
     * number of active time series that are allowed in a project.
     *
     * Generated from protobuf field <code>map<string, string> label_extractors = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabelExtractors()
    {
        return $this->label_extractors;
    }

    /**
     * Optional. A map from a label key string to an extractor expression which is
     * used to extract data from a log entry field and assign as the label value.
     * Each label key specified in the LabelDescriptor must have an associated
     * extractor expression in this map. The syntax of the extractor expression
     * is the same as for the `value_extractor` field.
     * The extracted value is converted to the type defined in the label
     * descriptor. If the either the extraction or the type conversion fails,
     * the label will have a default value. The default value for a string
     * label is an empty string, for an integer label its 0, and for a boolean
     * label its `false`.
     * Note that there are upper bounds on the maximum number of labels and the
     * number of active time series that are allowed in a project.
     *
     * Generated from protobuf field <code>map<string, string> label_extractors = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabelExtractors($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->label_extractors = $arr;

        return $this;
    }

    /**
     * Optional. The `bucket_options` are required when the logs-based metric is
     * using a DISTRIBUTION value type and it describes the bucket boundaries
     * used to create a histogram of the extracted values.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions bucket_options = 8;</code>
     * @return \Google\Api\Distribution\BucketOptions
     */
    public function getBucketOptions()
    {
        return $this->bucket_options;
    }

    /**
     * Optional. The `bucket_options` are required when the logs-based metric is
     * using a DISTRIBUTION value type and it describes the bucket boundaries
     * used to create a histogram of the extracted values.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions bucket_options = 8;</code>
     * @param \Google\Api\Distribution\BucketOptions $var
     * @return $this
     */
    public function setBucketOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Distribution_BucketOptions::class);
        $this->bucket_options = $var;

        return $this;
    }

    /**
     * Deprecated. The API version that created or updated this metric.
     * The v2 format is used by default and cannot be changed.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogMetric.ApiVersion version = 4 [deprecated = true];</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Deprecated. The API version that created or updated this metric.
     * The v2 format is used by default and cannot be changed.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogMetric.ApiVersion version = 4 [deprecated = true];</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Logging\V2\LogMetric_ApiVersion::class);
        $this->version = $var;

        return $this;
    }

}

