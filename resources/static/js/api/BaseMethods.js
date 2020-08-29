import getData from "./utils/getData";
import BaseConfigs from "./BaseConfigs";

export default class BaseMethods extends BaseConfigs {
    baseUrl;

    async index(params) {
        return this.api.get(this.baseUrl, { params }).then(getData);
    }

    async destroy(id) {
        const url = this.baseUrl + "/" + id;

        return this.api.delete(url).then(getData);
    }
}
