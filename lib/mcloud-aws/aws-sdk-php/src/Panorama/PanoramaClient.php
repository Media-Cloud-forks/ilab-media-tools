<?php

namespace MediaCloud\Vendor\Aws\Panorama;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Panorama** service.
 * @method \MediaCloud\Vendor\Aws\Result createApplicationInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createApplicationInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createJobForDevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createJobForDevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createNodeFromTemplateJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createNodeFromTemplateJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPackage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPackageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPackageImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPackageImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePackage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePackageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterPackageVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterPackageVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeApplicationInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeApplicationInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeApplicationInstanceDetails(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeApplicationInstanceDetailsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDeviceJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDeviceJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeNode(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeNodeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeNodeFromTemplateJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeNodeFromTemplateJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePackage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePackageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePackageImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePackageImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePackageVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePackageVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listApplicationInstanceDependencies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listApplicationInstanceDependenciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listApplicationInstanceNodeInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listApplicationInstanceNodeInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listApplicationInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listApplicationInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDevicesJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDevicesJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listNodeFromTemplateJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listNodeFromTemplateJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listNodes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listNodesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPackageImportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPackageImportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPackages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPackagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result provisionDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise provisionDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerPackageVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerPackageVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeApplicationInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeApplicationInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDeviceMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDeviceMetadataAsync(array $args = [])
 */
class PanoramaClient extends AwsClient {}