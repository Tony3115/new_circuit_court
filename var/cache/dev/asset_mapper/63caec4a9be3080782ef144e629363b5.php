O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:95:"C:\laragon\www\new_circuit_court\vendor\symfony\ux-turbo\assets\dist\turbo_stream_controller.js";s:10:"publicPath";s:85:"/assets/@symfony/ux-turbo/turbo_stream_controller-93a0355f403f072bedda47f1137f108c.js";s:23:"publicPathWithoutDigest";s:52:"/assets/@symfony/ux-turbo/turbo_stream_controller.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1380:"import { Controller } from '@hotwired/stimulus';
import { connectStreamSource, disconnectStreamSource } from '@hotwired/turbo';

class default_1 extends Controller {
    initialize() {
        const errorMessages = [];
        if (!this.hasHubValue)
            errorMessages.push('A "hub" value pointing to the Mercure hub must be provided.');
        if (!this.hasTopicValue && !this.hasTopicsValue)
            errorMessages.push('Either "topic" or "topics" value must be provided.');
        if (errorMessages.length)
            throw new Error(errorMessages.join(' '));
        const u = new URL(this.hubValue);
        if (this.hasTopicValue) {
            u.searchParams.append('topic', this.topicValue);
        }
        else {
            this.topicsValue.forEach((topic) => {
                u.searchParams.append('topic', topic);
            });
        }
        this.url = u.toString();
    }
    connect() {
        if (this.url) {
            this.es = new EventSource(this.url, { withCredentials: this.withCredentialsValue });
            connectStreamSource(this.es);
        }
    }
    disconnect() {
        if (this.es) {
            this.es.close();
            disconnectStreamSource(this.es);
        }
    }
}
default_1.values = {
    topic: String,
    topics: Array,
    hub: String,
    withCredentials: Boolean,
};

export { default_1 as default };
";s:6:"digest";s:32:"93a0355f403f072bedda47f1137f108c";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:44:"@symfony/ux-turbo/turbo_stream_controller.js";}